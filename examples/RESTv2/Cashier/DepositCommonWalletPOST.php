<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Cashier;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class DepositCommonWalletPOST extends RestExample
{
    /**
     * DepositCommonWalletPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'player_id' => '10307426',
                'method_id' => 0,
                'amount' => 0,
                'tracking_one' => 'string',
                'tracking_two' => 'string',
                'tracking_three' => 'string',
                'tracking_four' => 'string',
                'session_id' => 0,
                'user_id' => 0,
                'skin_id' => 0,
                'depositor' => 'player'
            ];

            $result = $casino->CashierService->depositCommonWalletPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
