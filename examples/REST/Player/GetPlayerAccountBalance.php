<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPlayerAccountBalance
{
    /**
     * GetPlayerAccountBalance constructor.
     * @param CasinoRest $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "playerId": "10219132",
                "forMoney": "true"
            }';
            $result = $casino->player->getPlayerAccountBalance($query);

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
