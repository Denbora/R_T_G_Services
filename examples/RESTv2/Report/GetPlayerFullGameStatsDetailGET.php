<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerFullGameStatsDetailGET extends RestExample
{
    /**
     * GetPlayerFullGameStatsDetailGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'startDate' => '2019-06-06',
                'endDate' => '2019-07-09',
                'gameId' => 0,
                'machId' => 0,
            ];

            $result = $casino->ReportService->getPlayerFullGameStatsDetailGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
