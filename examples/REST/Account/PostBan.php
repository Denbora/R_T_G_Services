<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostBan
{
    public function __construct(CasinoRest $casino)
    {
        // NATA: 10247361
        // I: 10309308
        try {
            // property "deductAffiliateEarnings" for query
            $query = '{
                "ban_type": "email",
                "comment": "Ban me",
                "player_id": "10247361",
                "deductAffiliateEarnings": "false"
            }';

            $result = $casino->account->postBan($query);

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
