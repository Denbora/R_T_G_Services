<?php

namespace denbora\R_T_G_Services\examples\REST\Account;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostIncompleteSignups
{
    /**
     * PostIncompleteSignups constructor.
     * @param CasinoRest $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "login": "porter-8531",
                "email": "porter-8531@gmail.com",
                "client_id": 0,
                "start_date": "2017-08-30",
                "status": "A",
                "first_name": "porter",
                "last_name": "porter"
            }';
            $result = $casino->account->postIncompleteSignups($query);

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
