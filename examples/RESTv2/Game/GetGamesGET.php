<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetGamesGET extends RestExample
{
    /**
     * GetGamesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'enabledOnly' => true,
                'mobileGames' => true,
            ];

            $result = $casino->GameService->getGamesGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
