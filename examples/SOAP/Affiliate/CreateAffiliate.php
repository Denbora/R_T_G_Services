<?php

namespace denbora\R_T_G_Services\examples\SOAP\Affiliate;

use denbora\R_T_G_Services\casino\Casino;

class CreateAffiliate
{
    /**
     * CreateAffiliate constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $affiliateService = $casino->getService($service);
            $inputs = array(
                'programID' => '1',
                'firstName' => 'test',
                'lastName' => 'porter',
                'password' => '123456789',
                'email' => 'porter-842@mail.com',
                'phone' => '4124124',
                'fax' => '124124',
                'companyName' => 'QM',
                'description' => 'test',
                'URL' => 'http://www.2288.com',
                'addnlURL' => '',
                'addr1' => '2288',
                'addr2' => '2288',
                'city' => 'fasdfxcva',
                'state' => 'fasdfaa',
                'zip' => '124125',
                'country' => 'EG',
                'parentAID' => 0,
                'noSpam' => 'true',
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
