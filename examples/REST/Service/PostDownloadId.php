<?php

namespace denbora\R_T_G_Services\examples\REST\Service;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostDownloadId
{
    /**
     * PostDownloadId constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "name": "user-007",
                "email": "newuser45127s@mail.com",
                "ip": "127.0.0.1",
                "version": 0,
                "came_from": "bovegas",
                "adId": 0,
                "affiliate_id": 102,
                "tracking_id": "35641_377495"
            }';
            $result = $casino->service->postDownloadId($query);

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
