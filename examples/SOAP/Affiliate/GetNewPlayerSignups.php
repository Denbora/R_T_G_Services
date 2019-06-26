<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class GetNewPlayerSignups
{
    /**
     * GetNewPlayerSignups constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $affiliateService = $casino->getService($service);
            $inputs = array(
                'asOfDate' => '2017-12-11',
                'untilDate' => '2017-12-17'
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
