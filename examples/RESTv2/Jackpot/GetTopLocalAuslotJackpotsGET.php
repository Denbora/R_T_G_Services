<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Jackpot;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetTopLocalAuslotJackpotsGET extends RestExample
{
    /**
     * GetTopLocalAuslotJackpotsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'numberOfJackpots' => 0,
                'playerId' => '10307426',
                'skinId' => 1
            ];

            $result = $casino->JackpotService->getTopLocalAuslotJackpotsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
