<?php

namespace denbora\R_T_G_Services\examples\REST\Report;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetLastGamesPlayed
{
    /**
     * GetLastGamesPlayed constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "numberOfGames": 1,
                "playerId": "10024193"
            }';
            $result = $casino->report->getLastGamesPlayed($query);

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
