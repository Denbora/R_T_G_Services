<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayedGamesGET extends RestExample
{
    /**
     * GetPlayedGamesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2019-07-04',
                'endDate' => '2019-07-08',
                'machIds' => [0, 1],
                'gameIds' => [2, 5],
                'forMoney' => true,
                'clientId' => 5
            ];

            $result = $casino->ReportService->getPlayedGamesGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
