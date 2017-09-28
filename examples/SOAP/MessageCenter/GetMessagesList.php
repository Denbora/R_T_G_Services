<?php

namespace denbora\R_T_G_Services\examples\SOAP\MessageCenter;

use denbora\R_T_G_Services\casino\Casino;

class GetMessagesList
{
    /**
     * GetMessagesList constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $messageCenterService = $casino->getService($service);
            $inputs = array(
                'PID' => '10025652',
                'MoneyType' => '1',
                'SkinID' => 1,
                'ClientType' => '1'
            );

            $result = $messageCenterService->call($method, $inputs);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
