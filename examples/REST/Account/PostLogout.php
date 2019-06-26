<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostLogout
{
    /**
     * PostLogout constructor.
     * @param CasinoRest $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "logout_type": "player_logout",
                "login": "porter-913",
                "player_id": "10024427",
                "for_money": true
            }';
            $result = $casino->account->postLogout($query);

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
