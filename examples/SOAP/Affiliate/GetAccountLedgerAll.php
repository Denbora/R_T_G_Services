<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class GetAccountLedgerAll
{
    /**
     * GetAccountLedgerAll constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, Casino $casino)
    {
        try {
            $affiliateService = $casino->getService($service);
            $inputs = array(
                'fromDate' => '2017-08-01',
                'toDate' => '2017-09-03'
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
