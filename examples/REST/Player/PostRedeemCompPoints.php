<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostRedeemCompPoints
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'playerId' => '10096980',
                'amount' => '10',
            ];

            $result = $casino->player->postRedeemCompPoints(json_encode($query));

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
