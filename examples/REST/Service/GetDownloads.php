<?php

namespace denbora\R_T_G_Services\examples\REST\Service;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetDownloads
{
    /**
     * GetDownloads constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "playerId": "10221674",
                "startDate": "",
                "endDate": "",
                "downloadId": "",
                "affiliateId": "",
                "trackingId": ""
            }';
            $result = $casino->service->getDownloads($query);

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
