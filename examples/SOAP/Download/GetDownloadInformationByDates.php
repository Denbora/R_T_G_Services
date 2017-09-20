<?php

namespace denbora\R_T_G_Services\examples\SOAP\Download;

use denbora\R_T_G_Services\casino\Casino;

class GetDownloadInformationByDates
{
    /**
     * GetDownloadInformationByDates constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);

            $data = array(
                'StartDate' => '2017-07-01',
                'EndDate' => '2017-08-03'
            );

            $result = $playerService->call($method, $data);

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
