<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class LogoutPlayerPOST extends RestExample
{
    /**
     * LogoutPlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'logout_type' => 'player_logout',
                'login' => 'tony_0001',
                'player_ids' => [
                    '10307426'
                ],
                'player_id' => '10307426',
                'for_money' => 'true',
            ];

            $result = $casino->AccountService->logoutPlayerPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
