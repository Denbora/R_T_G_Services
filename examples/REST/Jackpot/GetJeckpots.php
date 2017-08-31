<?php

namespace denbora\R_T_G_Services\examples\REST\Jackpot;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetJeckpots
{
    /**
     * GetJeckpots constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "forMoney": "true",
                "currencyCode": "EUR"
            }';
            $result = $casino->jackpot->getJeckpots($query);

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
