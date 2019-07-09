<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class LoginPlayerPOST extends RestExample
{
    /**
     * LoginPlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'login' => 'tony_0001',
                'password' => 'tony_0001',
                'skin_id' => 0,
                'client_id' => 0,
                'switchToRealSource' => 0,
                'ip_address' => '127.0.0.1',
                'player_id' => '10307426',
                'for_money' => 'true',
            ];

            $result = $casino->AccountService->loginPlayerPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
