<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ClosePendingGamesByGameNumberListDELETE extends RestExample
{
    /**
     * RedeemCouponPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                "gameId" => 18,
                "gameNum" => 1
            ];

            $result = $casino->GameService->closePendingGamesByGameNumberListDELETE(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
