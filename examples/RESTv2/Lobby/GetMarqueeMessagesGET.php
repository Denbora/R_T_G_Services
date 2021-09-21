<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Lobby;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetMarqueeMessagesGET extends RestExample
{
    /**
     * GetMarqueeMessagesGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '1',
                'forMoney' => false,
                'skinId' => 1,
            ];

            $result = $casino->LobbyService->getMarqueeMessagesGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
