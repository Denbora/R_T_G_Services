<?php

namespace denbora\R_T_G_Services\examples\REST\Game;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetGames
{
    /**
     * GetGames constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "enabledOnly": "true"
            }';
            $result = $casino->game->getGames($query);

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
