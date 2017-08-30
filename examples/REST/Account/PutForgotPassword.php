<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PutForgotPassword
{
    /**
     * PutForgotPassword constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "player_id": "10024291"
            }';
            $result = $casino->account->putForgotPassword($query);

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
