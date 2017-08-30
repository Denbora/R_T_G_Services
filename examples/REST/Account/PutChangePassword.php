<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PutChangePassword
{
    /**
     * PutChangePassword constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "player": {
                    "player_id": "10024427"
                },
                "current_password": "porter_914",
                "new_password": "porter_913"
            }';
            $result = $casino->account->putChangePassword($query);

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
