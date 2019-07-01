<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetBalance
{
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "login": "malinichev",
                "forMoney": "true"
            }';
            $result = $casino->account->getBalance($query);

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
