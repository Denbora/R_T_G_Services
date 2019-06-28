<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostCouponRedeem
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'playerId' => '10000394',           //string is required
                'couponCode' => 'mariatest9',       //string is required
//                "sessionId" => "string",            //integer not required
//                'redeem' => 0,                      //boolean not required
            ];

            $result = $casino->player->postCouponRedeem(json_encode($query));

            echo "<pre>";
            print_r($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            print_r($e->getMessage());
            echo "</pre>";
        }
    }
}
