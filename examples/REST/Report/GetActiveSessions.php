<?php

namespace denbora\R_T_G_Services\examples\REST\Report;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetActiveSessions
{
    /**
     * GetActiveSessions constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '';
            $result = $casino->report->getActiveSessions($query);

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
