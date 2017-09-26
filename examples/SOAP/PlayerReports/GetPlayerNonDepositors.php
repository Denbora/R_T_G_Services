<?php

namespace denbora\R_T_G_Services\examples\SOAP\PlayerReports;

use denbora\R_T_G_Services\casino\Casino;

class GetPlayerNonDepositors
{
    /**
     * GetPlayerNonDepositors constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerReportsService = $casino->getService($service);
            $inputs = array(
                'DaysAgoSignup' => 1
            );

            $result = $playerReportsService->call($method, $inputs);

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
