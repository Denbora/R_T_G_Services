<?php

namespace denbora\R_T_G_Services\examples\REST\Cashier;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostCommonWalletWithdrawal
{
    /**
     * PostCommonWalletWithdrawal constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "player_id": "10024193",
                "method_id": 0,
                "amount": 0,
                "tracking_one": "string",
                "tracking_two": "string",
                "tracking_three": "string",
                "tracking_four": "string",
                "session_id": 0,
                "user_id": 0,
                "skin_id": 0,
                "depositor": "player"
            }';
            $result = $casino->cashier->postCommonWalletDeposit($query);

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
