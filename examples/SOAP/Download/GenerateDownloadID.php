<?php

namespace denbora\R_T_G_Services\examples\SOAP\Download;

use denbora\R_T_G_Services\casino\Casino;

class GenerateDownloadID
{
    /**
     * GenerateDownloadID constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);
            $inputs = array(
                'name' => 'Test',
                'email' => 'test@test.test',
                'ipAddress' => '127.0.0.1',
                'cameFrom' => 'http://saur4ig.com/',
                'adID' => 0,
                'affiliateID' => 19,
                'trackingID' => ''
            );

            //129910

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
