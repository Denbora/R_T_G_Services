<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostUnban
{
    public function __construct(CasinoRest $casino)
    {
        try {
            // property "includeAffiliateEarnings" for query
            $query = '{
                "player_id": "10247361",
                "includeAffiliateEarnings": "true"
            }';

            $result = $casino->account->postUnban($query);

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
