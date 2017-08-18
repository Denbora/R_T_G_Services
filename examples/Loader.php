<?php

namespace denbora\R_T_G_Services\examples;

use denbora\R_T_G_Services\casino\Casino;

class Loader
{
    /**
     * @param string $service
     * @param string $method
     * @param Casino $casino
     * @return mixed
     */
    public static function call(string $service, string $method, $casino)
    {
        $serviceClass =  __NAMESPACE__ . '\\'. $service . '\\'. ucwords($method);

        return new $serviceClass($service, $method, $casino);
    }
}
