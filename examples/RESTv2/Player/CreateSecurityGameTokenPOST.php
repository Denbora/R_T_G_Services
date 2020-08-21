<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateSecurityGameTokenPOST extends RestExample
{
    /**
     * RedeemCouponPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10000338',
                'gameParameters' => '{"GameId": 1, "MachineId": 18}'
            ];

            $result = $casino->PlayerService->createSecurityGameTokenPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
