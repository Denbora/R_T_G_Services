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

    /**
     * @param string $serviceName
     * @param string $serviceClass
     * @param string $serviceEndPoint
     * @return bool
     */
    public function addService(string $serviceName, string $serviceClass, string $serviceEndPoint): bool;
}
