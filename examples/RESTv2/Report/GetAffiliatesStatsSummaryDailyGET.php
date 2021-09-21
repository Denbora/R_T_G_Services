<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetAffiliatesStatsSummaryDailyGET extends RestExample
{
    /**
     * GetAffiliatesStatsSummaryDailyGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'beginDate' => '2021-06-02 00:00:00',
                'endDate' => '2021-06-02 23:59:59',
            ];

            $result = $casino->ReportService->getAffiliatesStatsSummaryDailyGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
