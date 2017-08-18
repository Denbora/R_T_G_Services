<?php

namespace denbora\R_T_G_Services\examples\Player;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreatePlayer
{
    /**
     * CreatePlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     * @throws R_T_G_ServiceException
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $createData = array(
                'Player' => 1,
                'ThirdPartyDataSync' => 'test1',
                'UserID' => '1',
                'MapToAffID' => '11',
                'CalledFromCasino' => 'adsf'
            );

            $result = $playerService->call($method, $createData);
            var_dump($result);
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
