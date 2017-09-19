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
            $playerService = $casino->getService($service);
            $inputs = array(
                'programID' => '15',
                'firstName' => '',
                'lastName' => '',
                'password' => '',
                'email' => '',
                'phone' => '',
                'fax' => '',
                'companyName' => '',
                'description' => '',
                'URL' => '',
                'addnlURL' => '',
                'addr1' => '',
                'addr2' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'country' => '',
                'parentAID' => '',
                'noSpam' => '',
            );

            $result = $playerService->call($method, $inputs);

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
