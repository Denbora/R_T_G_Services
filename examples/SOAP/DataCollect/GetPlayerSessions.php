<?php

namespace denbora\R_T_G_Services\examples\SOAP\DataCollect;

use denbora\R_T_G_Services\casino\Casino;

class GetPlayerSessions
{
    /**
     * GetPlayerSessions constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $dataCollection = $casino->getService($service);
            $inputs = array(
                'FromLogoutDate' => '2017-08-01',
                'ToLogoutDate' => '2017-08-03',
                'Login' => 'porter-007',
                'IncludeNoGameplay' => true
            );

            $result = $dataCollection->call($method, $inputs);

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
