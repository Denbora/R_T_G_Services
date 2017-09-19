<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class CreateProgram
{
    /**
     * CreateProgram constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $inputs = array(
                'name' => 'BovegasTest',
                'payPerDownloader' => 0.0,
                'payPerSignup' => 0.0,
                'payPerNewDepositor' => 0.0,
                'payPercentInitialDeposit' => 0.0,
                'payPercentLifeDeposits' => 0.0,
                'payPercentNetRevenue' => 0.0,
                'enabled' => 1,
                'published' => 0
            );

            $result = $playerService->call($method, $inputs);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";

        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
