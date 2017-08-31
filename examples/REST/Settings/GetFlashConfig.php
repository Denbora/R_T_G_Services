<?php

namespace denbora\R_T_G_Services\examples\REST\Settings;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetFlashConfig
{
    /**
     * GetFlashConfig constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '';
            $result = $casino->settings->getFlashConfig($query);

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
