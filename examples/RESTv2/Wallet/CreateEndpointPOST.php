<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateEndpointPOST extends RestExample
{
    /**
     * PlaceSettlementPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'walletUrl' => 'test',
                'walletTimeout' => 1,
                'balanceThreshold' => 5.2,
                'providerOptions' => 'test',
                'isActive' => false,
                'walletCode' => 'test_code',
                'cancelFailedWithdrawal' => false,
            ];

            $result = $casino->WalletService->createEndpointPOST(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
