<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerGameStatsDetailByGameGET extends RestExample
{
    /**
     * GetPlayerGameStatsDetailByGameGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'startDate' => '2019-07-07',
                'endDate' => '2019-07-09',
                'filterDateType' => 'start_date', //start_date|end_date
                'avoidMultipleRows' => true,
                'gameId' => 0,
                'machId' => 0,
            ];

            $result = $casino->ReportService->getPlayerGameStatsDetailByGameGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
