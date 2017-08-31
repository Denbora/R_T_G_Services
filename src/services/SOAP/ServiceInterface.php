<?php

namespace denbora\R_T_G_Services\services\SOAP;

/**
 * Interface ServiceInterface
 * @package denbora\R_T_G_Services\services\SOAP
 */
interface ServiceInterface
{
    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false);
}
