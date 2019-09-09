<?php

namespace denbora\R_T_G_Services\casino;

/**
 * Interface CasinoInterface
 * @package denbora\R_T_G_Services\casino
 */
interface CasinoInterface
{
    /**
     * @param string $serviceName
     * @return mixed
     */
    public function getService(string $serviceName);
}
