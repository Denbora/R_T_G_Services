<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerGameStatisticsGET extends RestExample
{
    /**
     * GetPlayerGameStatisticsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'lastUpdateDate' => '2019-06-06',
                'forMoney' => true,
                'loginFilter' => 'tony_0003',
            ];

            $result = $casino->ReportService->getPlayerGameStatisticsGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
