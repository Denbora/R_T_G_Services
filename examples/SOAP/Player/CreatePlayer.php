<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class CreatePlayer
{
    /**
     * CreatePlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $createData = array(
                'Player' => array(
                    'Login' => 'porter-007',
                    'Password' => 'porter_007',
                    'Contact' => array(
                        'CountryID' => 'EG',
                        'EMail' => 'opagangtest28@gmail.com'
                    )
                ),
                'HashedPassword' => '9bc34549d565d9505b287de0cd20ac77be1d3f2c',
                'ThirdPartyDataSync' => false,
                'UserID' => 0,
                'MapToAffID' => false,
                'CalledFromCasino' => false
            );

            //porter-8034 - pid - 10025631
            //porter-007  - pid - 10025652 - password - porter_007 - hash - 9bc34549d565d9505b287de0cd20ac77be1d3f2c

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
