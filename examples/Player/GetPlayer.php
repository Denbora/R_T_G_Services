<?php

namespace denbora\R_T_G_Services\examples\Player;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayer
{
    /**
     * GetPlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     * @throws R_T_G_ServiceException
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $pid = '10013051';

            $result = $playerService->call($method, $pid);
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