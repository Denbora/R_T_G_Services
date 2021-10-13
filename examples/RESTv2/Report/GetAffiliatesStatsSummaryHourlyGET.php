<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetAffiliatesStatsSummaryHourlyGET extends RestExample
{
    /**
     * GetAffiliatesStatsSummaryHourlyGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'beginDate' => '2021-09-22 00:00:00',
                'endDate' => '2021-09-22 01:59:59',
            ];

            $result = $casino->ReportService->getAffiliatesStatsSummaryHourlyGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
