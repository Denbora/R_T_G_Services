<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Affiliate;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayersSummaryGET extends RestExample
{
    /**
     * GetPlayersSummaryGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromDate' => '2021-09-22 00:00:00',
                'toDate' => '2021-09-22 00:59:59',
                'defaultAffiliateId' => 1024,
            ];

            $result = $casino->AffiliateService->getPlayersSummaryGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
