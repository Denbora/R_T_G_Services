<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Jackpot;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetLobbyGetProgressiveJackpotGET extends RestExample
{
    /**
     * GetLobbyGetProgressiveJackpotGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'forMoney' => true,
                'skinId' => 1,
                'optionId' => 1,
            ];

            $result = $casino->JackpotService->getLobbyGetProgressiveJackpotGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
