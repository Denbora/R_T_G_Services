<?php

namespace denbora\R_T_G_Services\casino;

/**
 * Interface CasinoInterface
 * @package denbora\R_T_G_Services\casino
 */
interface CasinoInterface
{
    /**
     * @param $serviceName string
     * @return mixed
     */
    public function getService(string $serviceName);

    /**
     * @param $serviceName string
     * @param $serviceClass string
     * @param $serviceEndPoint string
     * @return boolean
     */
    public function addService($serviceName, $serviceClass, $serviceEndPoint);
}
