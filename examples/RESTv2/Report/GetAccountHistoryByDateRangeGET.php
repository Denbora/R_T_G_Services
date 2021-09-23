<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetAccountHistoryByDateRangeGET extends RestExample
{
    /**
     * GetAccountHistoryByDateRangeGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromDate' => '2019-09-01 00:00:00',
                'toDate' => '2019-09-22 23:59:59',
                'playerLogin' => 'emmett123',
            ];
            $result = $casino->ReportService->getAccountHistoryByDateRangeGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
