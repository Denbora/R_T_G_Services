<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\services\SOAP\ServiceInterface;

class SoapAdapterService extends RestV3Service
{
    /**
     * @var null|Casino
     */
    private $casino = null;

    /**
     * @param string $service
     * @param string $method
     * @param array $data
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function call(string $service, string $method, array $data)
    {
        if ($this->casino instanceof Casino) {
            /**@var $serviceObj ServiceInterface */
            $serviceObj = $this->casino->getService($service);
            return $serviceObj->call($method, $data);
        }

        return $this->post(
            $this->generateUrl($service, $method),
            json_encode($data)
        );
    }

    public function init(Casino $casino)
    {
        $this->casino = $casino;
    }

    private function generateUrl(string $service, string $method): string
    {
        return $this->baseUrl . $service . '/' . $method;
    }
}
