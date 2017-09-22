<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class UpdateAffiliate
{
    /**
     * UpdateAffiliate constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $affiliateService = $casino->getService($service);
            $inputs = array(
                'AID' => 555,
                'firstName' => 'asdfasd',
                'lastName' => 'asdfasdf',
                'newPassword' => '123456',
                'email' => 'asdfas@afasdf.asdf',
                'phone' => '124124',
                'fax' => '124124',
                'companyName' => 'asdfasdf',
                'description' => 'aasdfasdfadfadsf',
                'URL' => 'asdfasdfa.aadfa',
                'addnlURL' => 'adfasdf.adsfa',
                'addr1' => 'agjhdfgh',
                'addr2' => 'dwytxcb',
                'City' => 'qeqreqr',
                'state' => 'asdfaq',
                'Zip' => '124124',
                'country' => 'US',
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
