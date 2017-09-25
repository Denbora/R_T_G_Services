<?php

namespace denbora\R_T_G_Services\examples\SOAP\GameHistory;

use denbora\R_T_G_Services\casino\Casino;

class GetRSVSSummaryHistory
{
    /**
     * GetRSVSSummaryHistory constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $gameHistoryService = $casino->getService($service);
            $inputs = array(
                'Login' => 'porter-007',
                'pid' => '10025652',
                'machID' => 1,
                'forMoney' => false,
                'startDate' => '2017-08-03',
                'endDate' => '2017-09-03',
                'maxRows' => 15
            );

            $result = $gameHistoryService->call($method, $inputs);

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
