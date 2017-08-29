<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPlayers
{
    /**
     * GetPid constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "startDate": "2017-08-09",
                "endDate": "2017-08-10"
            }';
            $result = $casino->player->getPlayers($query);

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
