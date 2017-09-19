<?php

namespace denbora\R_T_G_Services\examples\SOAP\Security;

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
                'Token' => '582F6460-E7A9-4556-9230-DF70EC15AF83s@Lt',
                'PID' => '10024291',
                'ApplicationName' => 'Web Cashier'
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
