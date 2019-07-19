<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetRouletteHistoryGET extends RestExample
{
    /**
     * GetRouletteHistoryGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'forMoney' => true,
                'startDate' => '2019-07-07',
                'endDate' => '2019-07-08',
//                'machineId' => 0,
//                'maxRows' => 0
            ];

            $result = $casino->PlayerService->getRouletteHistoryGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
