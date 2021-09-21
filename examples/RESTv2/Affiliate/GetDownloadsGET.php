<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Affiliate;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetDownloadsGET extends RestExample
{
    /**
     * GetDownloadsGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'startDate' => '2021-09-09',
                'endDate' => '2021-09-10',
                'downloadId' => '', //parameter values can be: 1 = Full | 100 = SmartDownload | 200 = API.
                'affiliateId' => '',
                'trackingId' => '',
            ];

            $result = $casino->AffiliateService->getDownloadsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
