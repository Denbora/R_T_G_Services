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

    protected static $defaultName = 'app:update-services-list';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $services = $this->parseJsonSwaggerApi();

        file_put_contents(self::SERVICES_LIST, json_encode($services));

        $io = new SymfonyStyle($input, $output);

        $io->success('Generated services list');
    }

    private function parseJsonSwaggerApi(): array
    {
        $json = file_get_contents(__DIR__ . '/openAPI.json');

        $apiData = json_decode($json, true);

        try {
            foreach ($apiData['paths'] as $pathTemplate => $methods) {
                foreach ($methods as $methodType => $method) {
                    list($categoryName, $methodName) = explode('_', $method['operationId']);

                    if (isset($method['parameters'])) {
                        $parameters = [];
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

                    $result[$categoryName][$methodName] = [
                        'method' => strtoupper($methodType),
                        'path' => $pathTemplate,
                        'parameters' => $parameters ?? [],
                        'responses' => $responses ?? []
                    ];
                }
            }
        } catch (Exception $exception) {
            var_dump([
                $exception, $response ?? null, $method
            ]);
        }

        return $result ?? [];
    }
}
