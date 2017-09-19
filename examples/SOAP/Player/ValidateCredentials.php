<?php

namespace denbora\R_T_G_Services\examples\SOAP\Player;

use denbora\R_T_G_Services\casino\Casino;

class ValidateCredentials
{
    /**
     * ValidateCredentials constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $login = 'porter-007';
            $password = 'porter_007';
            $credentials = [
                'Login' => $login,
                'HashedPassword' => strtoupper(sha1($password, false)),
                'ForMoney' => false,
                'IP' => '77.88.239.206'
            ];

            $result = $playerService->call($method, $credentials);
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
