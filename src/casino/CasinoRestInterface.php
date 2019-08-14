<?php


namespace denbora\R_T_G_Services\casino;


interface CasinoRestInterface extends CasinoInterface
{
    public function setTimeout(int $sec);

    public function setConnectTimeout(int $sec);

    /**
     * setting default params
     *
     * @return void
     */
    public function resetTimeouts();
}
