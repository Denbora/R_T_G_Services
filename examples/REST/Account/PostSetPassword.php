<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostSetPassword
{
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "player": {
                    "player_id": "10309308"
                },
                "password": "malina95"
            }';

            $result = $casino->account->postSetPassword($query);

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
