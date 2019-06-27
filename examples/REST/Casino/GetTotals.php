<?php

namespace denbora\R_T_G_Services\examples\REST\Casino;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetTotals
{
    public function __construct(CasinoRest $casino)
    {
        try {
            $query = '{
                "requestDay": "2019-05-28"
            }';
            $result = $casino->casino->getTotals($query);

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
