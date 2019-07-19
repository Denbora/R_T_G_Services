<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetFlashGamesGET extends RestExample
{
    /**
     * GetFlashGamesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'skinId' => 1,
                'includeMenu' => true,
                'machineId' => 0,
                'gameId' => 0,
                'playerId' => '10307426',
            ];

            $result = $casino->GameService->getFlashGamesGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
