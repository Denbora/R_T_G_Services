<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetBlackjackHistory
{
    /**
     * GetBlackjackHistory constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "playerId": "10024193",
                "forMoney": "true",
                "startDate": "2017-08-08",
                "endDate": "2017-08-09"
            }';
            $result = $casino->player->getBlackjackHistory($query);

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
