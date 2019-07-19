<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Cashier;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ChargebackPOST extends RestExample
{
    /**
     * ChargebackPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'transaction_id' => 0,
                'amount' => 0,
                'user' => 'player'
            ];

            $result = $casino->CashierService->chargebackPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
