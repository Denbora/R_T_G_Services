<?php

namespace denbora\R_T_G_Services\examples\SOAP\Cashier;

use denbora\R_T_G_Services\casino\Casino;

class RedeemCoupon
{
    /**
     * RedeemCoupon constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $gameService = $casino->getService($service);
            $inputs = array(
                'casinoID' => 1,
                'PID' => '10032088',
                'couponCode' => 'BOVEGAS250',
                'sessionID' => 317686,
                'skinID' => 2,
                'includeLiability' => 'DEFAULT_VALUES'
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
