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
                'aid' => 86,
                'firstName' => 'Default',
                'lastName' => 'DefaultLuke',
                'newPassword' => '123456789',
                'email' => 'asdfas@jhasjf.sadf',
                'phone' => '12341234',
                'fax' => '12341234',
                'companyName' => 'QM',
                'description' => 'Default Aff',
                'URL' => 'fasdfasdf.asdf',
                'addnlURL' => 'afasdf.asdfasdf',
                'addr1' => 'Default',
                'addr2' => 'Default',
                'city' => 'Default',
                'state' => 'Default',
                'zip' => '124124',
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
