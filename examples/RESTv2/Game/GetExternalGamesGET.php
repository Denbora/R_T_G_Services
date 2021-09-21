<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetExternalGamesGET extends RestExample
{
    /**
     * GetExternalGamesGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $result = $casino->GameService->getExternalGamesGET();
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
