<?php

namespace denbora\R_T_G_Services\command;

use denbora\R_T_G_Services\examples\Create;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class RunExample extends Command
{
    const  EXAMPLE_NAMESPACE = 'denbora\\R_T_G_Services\\examples\\RESTv2\\';

    protected static $defaultName = 'app:run-example';

    protected function configure()
    {
        $this->setName(self::$defaultName)
            ->addArgument('service', InputArgument::REQUIRED, 'Service name in RESTv2')
            ->addArgument('method', InputArgument::REQUIRED, 'Method name in service');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     * @throws R_T_G_ServiceException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $serviceName = ucwords(str_replace('Service', '', $input->getArgument('service')));
        $methodName = ucwords($input->getArgument('method'));

        $classExample = self::EXAMPLE_NAMESPACE . $serviceName . '\\' . $methodName;

        if (class_exists($classExample)) {
            new $classExample(Create::createCasinoRESTv2());
        } else {
            $output->writeln('<error>Example not found!!!</error>');
        }
    }
}
