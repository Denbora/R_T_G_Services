<?php

namespace denbora\R_T_G_Services\examples\SOAP\DataCollect;

use denbora\R_T_G_Services\casino\Casino;

class GenerateReport
{
    /**
     * GenerateReport constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $dataCollection = $casino->getService($service);
            $inputs = array(
                'reportID' => 'EndOfMonthDownloads',
                'parameters' => '',
                'wsURLs' => '',
                'Certificate' => ''
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
