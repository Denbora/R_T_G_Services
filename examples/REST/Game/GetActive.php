<?php

namespace denbora\R_T_G_Services\examples\REST\Game;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetActive
{
    /**
     * GetActive constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "skinId": 1
            }';
            $result = $casino->game->getActive($query);

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
