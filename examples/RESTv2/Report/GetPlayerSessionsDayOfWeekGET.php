<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerSessionsDayOfWeekGET extends RestExample
{
    /**
     * GetPlayerSessionsDayOfWeekGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'requestDay' => '2019-07-07',
                'forMoney' => 0, //0 - for real|1 - for fun
                'playerId' => '10307426',
                'clientId' => 5,
            ];

            $result = $casino->ReportService->getPlayerSessionsDayOfWeekGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
