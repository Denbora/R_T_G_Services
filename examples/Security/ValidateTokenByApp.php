<?php

namespace denbora\R_T_G_Services\examples\Security;

use denbora\R_T_G_Services\casino\Casino;

class ValidateTokenByApp
{
    /**
     * ValidateTokenByApp constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);

            $validate = array(
                'Token' => 'sjkhgjsdfg',
                'PID' => '10013051',
                'ApplicationName' => 'External Token'
            );

            $result = $playerService->call($method, $validate);
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
