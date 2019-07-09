<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CancelBetDELETE extends RestExample
{
    /**
     * CancelBetDELETE constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'login' => 'tony_0003',
                'clientId' => '5',
                'transaction_id' => 'string',
                'amount' => 0,
                'round_id' => 'string',
                'game_id' => 'string',
            ];

            $result = $casino->WalletService->cancelBetDELETE();

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
