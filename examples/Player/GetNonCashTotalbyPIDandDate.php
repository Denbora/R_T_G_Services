<?php

namespace denbora\R_T_G_Services\examples\Player;

use denbora\R_T_G_Services\casino\Casino;

class GetNonCashTotalbyPIDandDate
{
    /**
     * GetNonCashTotalbyPIDandDate constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $args = array(
                'PID' => '10024193',
                'BeginDate' => '2017-08-01',
                'EndDate' => '2017-08-03'
            );

            $result = $playerService->call($method, $args);

            echo "<pre>";
            var_dump($result);
            echo "<pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
