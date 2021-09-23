<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetGamingActivityReportGET extends RestExample
{
    /**
     * GetGamingActivityReportGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2021-09-22 00:00:00',
                'endDate' => '2021-09-22 23:00:00',
                'forMoney' => false,
                'playerId' => '10798420', //emmett123
            ];
            $result = $casino->ReportService->getGamingActivityReportGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
