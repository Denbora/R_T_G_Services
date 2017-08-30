<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\FactoryInterface;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ResponseFactory implements FactoryInterface
{
    /**
     * @param string $type
     * @return mixed|object
     * @throws R_T_G_ServiceException
     */
    public static function build(string $type)
    {
        $response = 'denbora\\R_T_G_Services\\responses\\' . ucwords($type);

        if (class_exists($response)) {
            return new $response();
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'Invalid Response given');
        }
    }
}
