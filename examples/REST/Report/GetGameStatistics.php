<?php

namespace denbora\R_T_G_Services\examples\REST\Report;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetGameStatistics
{
    /**
     * GetGameStatistics constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "lastUpdateDate": 3,
                "forMoney": "true"
            }';
            $result = $casino->report->getGameStatistics($query);

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
