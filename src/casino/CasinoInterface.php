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
     * @param bool $cleanResponse
     * @return mixed
     */
    public function getService(string $serviceName, bool $cleanResponse);

    /**
     * @param $serviceName string
     * @param $serviceClass string
     * @param $serviceEndPoint string
     * @return boolean
     */
    public function addService($serviceName, $serviceClass, $serviceEndPoint);
}
