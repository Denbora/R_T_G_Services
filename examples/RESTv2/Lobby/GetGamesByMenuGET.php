<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Lobby;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetGamesByMenuGET extends RestExample
{
    /**
     * GetGamesByMenuGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10798420', //emmett123
                'menuId' => 7,
                'skinId' => 1,
            ];

            $result = $casino->LobbyService->getGamesByMenuGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
