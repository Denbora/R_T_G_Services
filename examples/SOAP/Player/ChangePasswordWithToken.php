<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class ChangePasswordWithToken
{
    /**
     * ChangePasswordWithToken constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $data = array(
                'Login' => 'porter-922',
                'NewPassword' => 'porter-2231',
                'Token' => 'adwfsqwe',
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
