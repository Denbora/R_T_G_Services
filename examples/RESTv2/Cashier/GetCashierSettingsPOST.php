<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Cashier;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetCashierSettingsPOST extends RestExample
{
    /**
     * GetCashierSettingsPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'playerId' => '10307426',
                'client_type' => 5,
                'cashier_type' => 'deposit',
                'skinId' => 0,
                'forMoney' => true //bool
            ];

            $result = $casino->CashierService->getCashierSettingsPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
