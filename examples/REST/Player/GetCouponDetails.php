<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetCouponDetails
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "playerId": "10096980",
                "clientId": null
            }';

            $result = $casino->player->getCouponDetails($query);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e->getMessage());
            echo "</pre>";
        }
    }
}
