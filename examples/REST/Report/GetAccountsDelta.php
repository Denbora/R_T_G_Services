<?php

namespace denbora\R_T_G_Services\examples\REST\Report;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetAccountsDelta
{
    /**
     * GetAccountsDelta constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "startUpdateDate": "2017-08-09",
                "allowNegativeBalance": "true"
            }';
            $result = $casino->report->getAccountsDelta($query);

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
