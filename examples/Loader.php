<?php

namespace denbora\R_T_G_Services\examples;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\casino\CasinoRest;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class Loader
{
    /**
     * @param string $service
     * @param string $method
     * @param Casino $casino
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public static function call(string $service, string $method, $casino)
    {
        try {
            $serviceClass = __NAMESPACE__ . '\\' . 'SOAP'. '\\' . $service . '\\' . ucwords($method);
            return new $serviceClass($service, $method, $casino);
        } catch (\Exception $e) {
            throw new R_T_G_ServiceException('Loader error: ' . $e->getMessage());
        }
    }

    /**
     * @param CasinoRest $casino
     * @return mixed
     * @throws R_T_G_ServiceException
     * @internal param RestService $service
     */
    public static function rest($casino)
    {
        try {
            $serviceClass = __NAMESPACE__ . '\\' . 'REST'. '\\' . 'RestCall';
            return new $serviceClass($casino);
        } catch (\Exception $e) {
            throw new R_T_G_ServiceException('Loader error: ' . $e->getMessage());
        }
    }
}
