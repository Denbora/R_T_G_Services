<?php

namespace denbora\R_T_G_Services\examples\REST\History;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetRsvsGameDetailsWithIcons
{
    /**
     * GetRsvsGameDetailsWithIcons constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "gameNumber": "22"
            }';
            $result = $casino->history->getRsvsGameDetailsWithIcons($query);

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
