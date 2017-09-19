<?php

namespace denbora\R_T_G_Services\examples\SOAP\Download;

use denbora\R_T_G_Services\casino\Casino;

class GetDownloadInformationByAffId
{
    /**
     * GetDownloadInformationByAffId constructor.
     * @param string $service
     * @param string $method
     * @param Casino $casino
     */
    public function __construct(string $service, string $method, $casino)
    {
        try {
            $playerService = $casino->getService($service);

            $AffiliatedID = 19;

            $result = $playerService->call($method, $AffiliatedID);

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
