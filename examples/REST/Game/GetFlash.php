<?php

namespace denbora\R_T_G_Services\examples\REST\Game;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetFlash
{
    /**
     * GetFlash constructor.
     * @param CasinoRest $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "skinId": 0,
                "includeMenu": "true"
            }';
            $result = $casino->game->getFlash($query);

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
