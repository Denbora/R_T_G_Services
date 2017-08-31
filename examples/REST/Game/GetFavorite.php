<?php

namespace denbora\R_T_G_Services\examples\REST\Game;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetFavorite
{
    /**
     * GetActive constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "playerId": "10024193",
                "skinId": 1
            }';
            $result = $casino->game->getFavorite($query);

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
