<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Lobby;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetSubMenusGET extends RestExample
{
    /**
     * GetSubMenusGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'skinId' => 1,
                'menuId' => 7,
            ];

            $result = $casino->LobbyService->getSubMenusGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
