<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PutChangePasswordWithToken
{
    /**
     * PutChangePasswordWithToken constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "player": {
                    "player_id": "10024427"
                },
                "new_password": "asdf12adf",
                "token": "ADNAMN12NHNB124FA"
            }';
            $result = $casino->account->putChangePasswordWithToken($query);

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
