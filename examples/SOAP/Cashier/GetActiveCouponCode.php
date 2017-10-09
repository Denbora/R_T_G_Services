<?php

namespace denbora\R_T_G_Services\examples\SOAP\Cashier;

use denbora\R_T_G_Services\casino\Casino;

class GetActiveCouponCode
{
    /**
     * GetActiveCouponCode constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $gameService = $casino->getService($service);
            $inputs = array(
                'PID' => '10025652',
                'casinoId' => 2
            );

            $result = $gameService->call($method, $inputs);

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
