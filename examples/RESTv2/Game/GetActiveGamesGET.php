<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetActiveGamesGET extends RestExample
{
    /**
     * GetActiveGamesGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'skinId' => 1,
                'includeMenu' => true,
                'playerId' => '10307426',
                'languageCode' => 'German',
            ];

            $result = $casino->GameService->getActiveGamesGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
