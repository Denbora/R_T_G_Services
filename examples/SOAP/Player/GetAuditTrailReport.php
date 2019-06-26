<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class GetAuditTrailReport
{
    /**
     * GetAuditTrailReport constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $data = array(
                'startDate' => '2017-08-01',
                'endDate' => '2017-08-03',
                'area' => '',
                'pid' => '',
                'playerClass' => '',
                'gameId' => '',
                'users' => ''
            );

            $result = $playerService->call($method, $data);
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
