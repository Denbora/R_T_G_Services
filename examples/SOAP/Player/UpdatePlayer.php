<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class UpdatePlayer
{
    /**
     * UpdatePlayer constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $createData = array(
                'Player' => array(
                    'PID' => '10023655',  //nu
                    'Login' => 'porter-12351',
                    'BirthDate' => '1980-01-01',
                    'Password' => 'porter_12351',
                    'Contact' => array(
                        'Gender' => 'Female',
                        'FirstName' => 'Test3123',
                        'LastName' => 'OPa',
                        'CountryID' => 'EG',
                        'EMail' => 'opagangtest21@gmail.com'
                    )
                ),
                'ThirdPartyDataSync' => false,
                'UserID' => 0,
                'allowBlanks' => false
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
