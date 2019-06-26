<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostToken
{
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "token_type": "web_cashier"
            }';

            $result = $casino->account->postToken($query);

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
