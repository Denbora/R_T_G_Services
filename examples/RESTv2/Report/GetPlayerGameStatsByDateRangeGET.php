<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerGameStatsByDateRangeGET extends RestExample
{
    /**
     * GetPlayerGameStatsByDateRangeGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromDate' => '2021-09-22 00:00:00',
                'toDate' => '2021-09-22 23:59:59',
                'forMoney' => false,
                'playerLogin' => 'emmett123', //emmett123
            ];
            $result = $casino->ReportService->getPlayerGameStatsByDateRangeGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
