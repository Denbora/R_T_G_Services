<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlaceSettlementInSeamlessPOST extends RestExample
{
    /**
     * PlaceSettlementPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'walletSettlementParams' => '{
                                              "player_id": "1231231",
                                              "currency_code": "USD",
                                              "amount": 0,
                                              "game_id": 0,
                                              "mach_id": 0,
                                              "ensure_real_balance_adjustment": true
                                             }'
            ];

            $result = $casino->WalletService->getWalletSetupInfoEndpointGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
