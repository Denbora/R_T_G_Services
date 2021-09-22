<?php

namespace denbora\R_T_G_Services\command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Exception;

class UpdateServicesList extends Command
{
    const SERVICES_LIST = __DIR__ . '/../config/restMethodsV2.json';
    const RESPONSE_CODES = __DIR__ . '/../config/codes_v2.json';

    protected static $defaultName = 'app:update-services-list';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        list($services, $responseCodes) = $this->parseJsonSwaggerApi();

        file_put_contents(self::SERVICES_LIST, json_encode($services, JSON_PRETTY_PRINT));
        file_put_contents(self::RESPONSE_CODES, json_encode($responseCodes, JSON_PRETTY_PRINT));

        $io = new SymfonyStyle($input, $output);

        $io->success('Generated services list');
    }

    private function parseJsonSwaggerApi(): array
    {
        $apiData = json_decode(file_get_contents(__DIR__ . '/openAPI.json'), true);

        try {
            if (!empty($apiData)) {
                foreach ($apiData['paths'] as $pathTemplate => $methods) {
                    foreach ($methods as $methodType => $method) {
                        list($categoryName, $methodName) = explode('_', $method['operationId']);

                        $parameters = [];
                        if (isset($method['parameters'])) {
                            foreach ($method['parameters'] as $parameter) {
                                if (!isset($parameter['schema'])) {
                                    $parameters[$parameter['name']] = [
                                        'dataType' => $parameter['type'],
                                        'parameterType' => $parameter['in'],
                                        'required' => $parameter['required'],
                                        'description' => $parameter['description'] ?? ''
                                    ];
                                } else {
                                    $parameters[$parameter['name']] = 'JSON';
                                }
                            }
                        }

                        $responses = [];
                        foreach ($method['responses'] as $code => $response) {
                            $responses[$code] = $response['description'];
                        }

                        $deprecated = "";
                        if (isset($method['deprecated']) && true === $method['deprecated']) {
                            $deprecated = $this->getDeprecationInfo($method['description'], $methodType);
                        }

                        $services[$categoryName][$methodName] = [
                            'method' => strtoupper($methodType),
                            'path' => $pathTemplate,
                            'parameters' => $parameters ?? [],
                            'responses' => $responses ?? [],
                            'deprecated' => $deprecated,
                        ];

                        $queryPathTemplate = strtoupper($methodType) . ' ' . $pathTemplate;
                        $responseCodes[$queryPathTemplate] = $responses ?? [];
                    }
                }
            }
        } catch (Exception $exception) {
            dd($exception, $response ?? null, $method);
        }

        return [
            $services ?? [],
            $responseCodes ?? []
        ];
    }

    /**
     * @param string $description
     * @param string $methodType
     * @return string
     */
    private function getDeprecationInfo(string $description, string $methodType): string
    {
        $deprecated = "";

        preg_match('/(?<=<a href="#!\/)(.*)(?=">~)/', $description, $matches);
        if (count($matches)) {
            $deprecationUseClass = current($matches);

            $isRestV3 = strpos(
                $deprecationUseClass,
                '/v3/'
            );

            $serviceNamespace = '\denbora\R_T_G_Services\services\\' . ($isRestV3 ? 'RESTv3\\' : 'RESTv2\\');

            list($serviceName, $methodName) = explode('/', str_replace('/v3/', '/', $deprecationUseClass));

            $methodName = str_replace($serviceName . "_", "", $methodName);
            $methodName = lcfirst($methodName) . strtoupper($methodType);

            $deprecated = "Use {@see " . $serviceNamespace . $serviceName . 'Service' . "::" . $methodName . "()}";
        }

        return $deprecated;
    }
}
