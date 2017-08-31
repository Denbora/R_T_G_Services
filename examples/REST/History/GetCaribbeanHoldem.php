<?php

namespace denbora\R_T_G_Services\examples\REST\History;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetCaribbeanHoldem
{
    /**
     * GetCaribbeanHoldem constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "machineId": "2",
                "gameNumber": "22"
            }';
            $result = $casino->history->getCaribbeanHoldem($query);

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
