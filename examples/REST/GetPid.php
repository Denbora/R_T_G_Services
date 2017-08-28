<?php

namespace denbora\R_T_G_Services\examples\REST;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPid
{
    /**
     * GetPid constructor.
     * @param $casino
     */
    public function __construct(CasinoRest $casino)
    {
        try {
            $restCall = $casino->getService('Rest');
            $login = 'porter-9821';
            $result = $restCall->getPid($login, true);

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
