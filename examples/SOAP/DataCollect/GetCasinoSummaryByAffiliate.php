<?php

namespace denbora\R_T_G_Services\examples\SOAP\DataCollect;

use denbora\R_T_G_Services\casino\Casino;

class GetCasinoSummaryByAffiliate
{
    /**
     * GetCasinoSummaryByAffiliate constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $dataCollection = $casino->getService($service);
            $inputs = array(
                'affiliateID' => 4,
                'StartDate' => '2017-08-03',
                'EndDate' => '2017-08-04'
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
