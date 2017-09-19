<?php

namespace denbora\R_T_G_Services\examples\SOAP\Download;

use denbora\R_T_G_Services\casino\Casino;

class GetDownloadURL
{
    /**
     * GetDownloadURL constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);

            $serverType = 1;

            $result = $playerService->call($method, $serverType);

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
