<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetDownloadsGET extends RestExample
{
    /**
     * GetDownloadsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'startDate' => '2019-07-07',
                'endDate' => '2019-07-08',
//                'downloadId' => '',
//                'affiliateId' => '',
//                'trackingId' => '',
            ];

            $result = $casino->ServiceService->getDownloadsGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
