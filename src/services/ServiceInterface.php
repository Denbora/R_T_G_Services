<?php

namespace denbora\R_T_G_Services\services;

/**
 * Interface ServiceInterface
 * @package denbora\R_T_G_Services\services
 */
interface ServiceInterface
{
    /**
     * @param $serviceMethod string
     * @param $data
     * @return mixed
     */
    public function call(string $serviceMethod, $data);
}
