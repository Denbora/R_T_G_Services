<?php

namespace denbora\R_T_G_Services\examples\SOAP\DataCollect;

use denbora\R_T_G_Services\casino\Casino;

class GetRSVSJackpotsByPID
{
    /**
     * GetRSVSJackpotsByPID constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $dataCollection = $casino->getService($service);
            $inputs = array(
                'ForMoney' => 1,
                'FromDate' => '2017-08-03',
                'ToDate' => '2017-08-04',
                'PID' => '10025652',
            );

            $result = $dataCollection->call($method, $inputs);

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
