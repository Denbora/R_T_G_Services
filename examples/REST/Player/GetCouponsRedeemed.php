<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetCouponsRedeemed
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'startDate' => '2019-05-21',
                'endDate' => '2019-05-23',
                'couponStatus' => 'request', // request or redemption
                'playerId' => '10096980',
                'couponCode' => 'CAVALRY'
            ];

            $result = $casino->player->getCouponsRedeemed(json_encode($query));

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
