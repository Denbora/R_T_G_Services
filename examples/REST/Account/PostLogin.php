<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostLogin
{
    /**
     * PostLogin constructor.
     * @param CasinoRest $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "login": "porter-12355",
                "password": "porter_12356",
                "skin_id": 0,
                "client_id": 0,
                "switchToRealSource": 0,
                "player_id": "10025123",
                "for_money": true
            }';
            $result = $casino->account->postLogin($query);

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
