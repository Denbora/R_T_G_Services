<?php

namespace denbora\R_T_G_Services\examples\REST;

use denbora\R_T_G_Services\casino\CasinoRest;

class RestCall
{
    /**
     * RestCall constructor.
     * @param $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $restCall = $casino->getService('Rest');

            $partUrl = 'accounts/playerid?login=porter-981';

            $result = $restCall->get($partUrl);

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
