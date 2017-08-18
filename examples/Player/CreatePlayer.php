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
                'Player' => array(
                    'Login' => 'porter-12351',
                    'Password' => 'porter_12351',
                    'Contact' => array(
                        'CountryID' => 'EG',
                        'EMail' => 'opagangtest21@gmail.com'
                    )
                ),
                'ThirdPartyDataSync' => false,
                'UserID' => '1',
                'MapToAffID' => false,
                'CalledFromCasino' => false
            );

            $result = $playerService->call($method, $createData);

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
