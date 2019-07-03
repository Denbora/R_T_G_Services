<?php

namespace denbora\R_T_G_Services\command;

use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\services\RESTv2\RestServiceInterface;
use denbora\R_T_G_Services\services\RESTv2\RestV2Service;
use Nette\PhpGenerator\PsrPrinter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Nette\PhpGenerator\PhpFile;

class GenerateServices extends Command
{
    /**
     * @var Table
     */
    private $table;

    protected static $defaultName = 'app:generate-services';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->table = new Table($output);
        $this->table->setHeaders(['Status', 'Type', 'Class']);

        $services = json_decode(file_get_contents(UpdateServicesList::SERVICES_LIST), true);

        foreach ($services as $serviceName => $serviceMethods) {
            $serviceNamespace = 'denbora\R_T_G_Services\services\RESTv2';
            $serviceFile = new PhpFile();
            $nameSpace = $serviceFile->addNamespace($serviceNamespace);
            $nameSpace->addUse('denbora\R_T_G_Services\R_T_G_ServiceException');

            $serviceClass = $serviceName . 'Service';

            $serviceClassFile = __DIR__ . '/../services/RESTv2/ ' . $serviceClass . '.php';

            $class = $nameSpace->addClass($serviceClass);
            $class->setExtends(RestV2Service::class)->addImplement(RestServiceInterface::class);
            $class->addConstant('SERVICE_NAME', $serviceName);

            foreach ($serviceMethods as $methodName => $method) {
                $servicesMethod = $class->addMethod(lcfirst($methodName) . strtoupper($method['method']));
                $servicesMethod->addComment('@param string $queryJSON');
                $servicesMethod->addComment('@return array|mixed|object|string');
                $servicesMethod->addComment('@throws R_T_G_ServiceException');
                $servicesMethod->addParameter('queryJSON', '{}');
                $servicesMethod
                    ->addBody('return $this->callMethod(self::SERVICE_NAME, \'' . $methodName . '\', $queryJSON);');
            }

            $status = 'Updated';
            if (!file_exists($serviceClassFile)) {
                $status = 'Created';
            }

            $handleServiceFile = fopen($serviceClassFile, 'w') or die("Can't create file");
            fwrite($handleServiceFile, (new PsrPrinter())->printFile($serviceFile));
            fclose($handleServiceFile);
            $this->table->addRow([$status, 'Service', $serviceNamespace . '\\' . $serviceClass]);

            foreach ($serviceMethods as $methodName => $method) {
                $this->createExample($serviceName, $methodName . strtoupper($method['method']));
            }
        }

        $this->table->render();
    }

    private function createExample(string $serviceName, string $methodName)
    {
        $exampleNamespace = 'denbora\\R_T_G_Services\\examples\\RESTv2\\';

        $exampleFile = new PhpFile();
        $nameSpace = $exampleFile->addNamespace($exampleNamespace . $serviceName);

        $directory = __DIR__ . '/../../examples/RESTv2/' . $serviceName;
        $exampleClassFile = $directory . '/' . $methodName . '.php';

        if (!file_exists($exampleClassFile)) {
            if (!file_exists($directory . '/')) {
                mkdir($directory);
            }

            $exampleClass = $nameSpace
                ->addUse(RestExample::class)
                ->addClass($methodName)
                ->setExtends(RestExample::class);

            $handleExampleFile = fopen($exampleClassFile, 'w') or die("Can't create file");
            fwrite($handleExampleFile, (new PsrPrinter())->printFile($exampleFile));
            fclose($handleExampleFile);

            $this->table->addRow(['Created', 'Example', $exampleNamespace . $serviceName . '\\' . $methodName]);
        }
    }
}
