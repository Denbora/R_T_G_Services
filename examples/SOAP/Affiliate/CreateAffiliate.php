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
                'firstName' => 'Default',
                'lastName' => 'DefaultLuke',
                'password' => '123456789',
                'email' => 'asgsadg@fasd.asdf',
                'phone' => '12341234',
                'fax' => '124124',
                'companyName' => 'QM',
                'description' => 'Default Aff',
                'URL' => 'asdfasd.fasdfa',
                'addnlURL' => '',
                'addr1' => 'Default',
                'addr2' => '',
                'city' => 'Default',
                'state' => 'Default',
                'zip' => '124125',
                'country' => 'US',
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
