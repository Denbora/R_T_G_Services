<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class GetDownloadInformationAll
{
    /**
     * GetDownloadInformationAll constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $affiliateService = $casino->getService($service);
            $inputs = array(
                'startdate' => '2017-09-20',
                'enddate' => '2017-09-21'
            );

            $result = $affiliateService->call($method, $inputs);

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
