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
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromDate' => '2019-06-06',
                'toDate' => '2019-07-09',
                'playerLogin' => 'sdsd',
            ];
            $result = $casino->ReportService->getAccountHistoryByDateRangeGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
