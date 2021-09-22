<?php

namespace denbora\R_T_G_Services\command;

use denbora\R_T_G_Services\ParseAPIException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Exception;

class UpdateServicesList extends Command
{
    const SERVICES_LIST = __DIR__ . '/../config/restMethodsV3.json';
    const RESPONSE_CODES = __DIR__ . '/../config/codes_v3.json';
    const FORCE_METHOD_NAMES = [
        '/api/games/pending-games' => 'ClosePendingGamesByList',
        '/api/reports/transactions-per-skin' => 'GetPlayerTransactionsPerSkin',
        '/api/v2/accounts/validate-credentials' => 'ValidateCredentialsV2',
        '/api/v2/jackpots/lobby-progressive-jackpot' => 'GetLobbyGetProgressiveJackpotV2',
        '/api/v2/players/{playerId}/coupons/active' => 'GetActiveCouponDetailsByPlayerV2',
    ];


    protected static $defaultName = 'app:update-services-list';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        list($services, $responseCodes) = $this->parseJsonSwaggerApi();

        file_put_contents(self::SERVICES_LIST, json_encode($services, JSON_PRETTY_PRINT));
        file_put_contents(self::RESPONSE_CODES, json_encode($responseCodes, JSON_PRETTY_PRINT));

        $io = new SymfonyStyle($input, $output);

        $io->success('Generated services list');
    }

    /**
     * @return array[]
     */
    private function parseJsonSwaggerApi(): array
    {
        $apiData = json_decode(file_get_contents(__DIR__ . '/openAPI.json'), true);

        try {
            if (!empty($apiData)) {
                $listOfOperationIds = [];
                foreach ($apiData['paths'] as $pathTemplate => $methods) {
                    foreach ($methods as $methodType => $method) {
                        list($categoryName, $methodName) = explode('_', $method['operationId']);

                        $methodName = $this->replaceMethodName($pathTemplate, $methodName);

                        $this->checkDuplicateMethodName($listOfOperationIds, $categoryName, $methodName);

                        $services[$categoryName][$methodName] = [
                            'method' => strtoupper($methodType),
                            'path' => $pathTemplate,
                            'parameters' => $this->getMethodParameters($method),
                            'responses' => $this->getMethodResponses($method),
                            'deprecated' => $this->getDeprecationInfo($method, $methodType),
                        ];

                        $queryPathTemplate = strtoupper($methodType) . ' ' . $pathTemplate;
                        $responseCodes[$queryPathTemplate] = $services[$categoryName][$methodName]['responses'];
                    }
                }
            }
        } catch (ParseAPIException $exception) {
            dd($exception->getMessage());
        } catch (Exception $exception) {
            dd($exception, $method);
        }

        return [
            $services ?? [],
            $responseCodes ?? []
        ];
    }

    /**
     * Force API method name to be replaced if needed
     * @param string $pathTemplate
     * @param string $methodName
     * @return string
     */
    private function replaceMethodName(string $pathTemplate, string $methodName): string
    {
        $result = $methodName;
        if (array_key_exists($pathTemplate, self::FORCE_METHOD_NAMES)) {
            $result = self::FORCE_METHOD_NAMES[$pathTemplate];
        }

        return $result;
    }

    /**
     * @param array $method
     * @return array
     */
    private function getMethodResponses(array $method): array
    {
        $responses = [];
        foreach ($method['responses'] as $code => $response) {
            $responses[$code] = $response['description'];
        }

        return $responses;
    }

    /**
     * @param array $method
     * @return array
     */
    private function getMethodParameters(array $method): array
    {
        $result = [];
        if (isset($method['parameters'])) {
            foreach ($method['parameters'] as $parameter) {
                if (!isset($parameter['schema'])) {
                    $result[$parameter['name']] = [
                        'dataType' => $parameter['type'],
                        'parameterType' => $parameter['in'],
                        'required' => $parameter['required'],
                        'description' => $parameter['description'] ?? ''
                    ];
                } else {
                    $result[$parameter['name']] = 'JSON';
                }
            }
        }

        return $result;
    }

    /**
     * @param array $listOfOperationIds
     * @param string $categoryName
     * @param string $methodName
     * @throws ParseAPIException
     */
    private function checkDuplicateMethodName(
        array &$listOfOperationIds,
        string $categoryName,
        string $methodName
    ) {
        $operationId = $categoryName . "_" . $methodName;
        if (in_array($operationId, $listOfOperationIds)) {
            throw new ParseAPIException(
                sprintf("Duplicate method  name \"%s\" in \"%s\" category", $methodName, $categoryName)
            );
        }
        $listOfOperationIds[] = $operationId;
    }

    /**
     * @param array $method
     * @param string $methodType
     * @return string
     */
    private function getDeprecationInfo(array $method, string $methodType): string
    {
        $result = "";
        if (!isset($method['deprecated']) || true !== $method['deprecated']) {
            return $result;
        }

        preg_match('/(?<=<a href="#!\/)(.*)(?=">)/', $method['description'], $matches);
        if (count($matches)) {
            $deprecationUseClass = current($matches);

            preg_match('/(?=\/api\/)(.*)(?=<\/a>)/', $method['description'], $matchesUrl);
            $deprecationUrl = count($matchesUrl) ? current($matchesUrl) : "";

            $isRestV3 = strpos(
                $deprecationUseClass,
                '/v3/'
            );

            $serviceNamespace = '\denbora\R_T_G_Services\services\\' . ($isRestV3 ? 'RESTv3\\' : 'RESTv2\\');

            list($serviceName, $methodName) = explode('/', str_replace('/v3/', '/', $deprecationUseClass));

            $methodName = str_replace($serviceName . "_", "", $methodName);
            $methodName = $this->replaceMethodName($deprecationUrl, $methodName);
            $methodName = lcfirst($methodName) . strtoupper($methodType);

            $result = "Use {@see " . $serviceNamespace . $serviceName . 'Service' . "::" . $methodName . "()}";
        }

        return $result;
    }
}
