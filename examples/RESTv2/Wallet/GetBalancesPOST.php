<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetBalancesPOST extends RestExample
{
    /**
     * GetBalancesPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'players' => ['10307426', '10314061'],
            ];

            $result = $casino->WalletService->getBalancesPOST(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
