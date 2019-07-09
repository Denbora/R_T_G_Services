<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateIncompleteSignupPOST extends RestExample
{
    /**
     * CreateIncompleteSignupPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'player' => [
                    'player_id' => '10307426' //this is tony_0001
                ],
                'new_password' => 'tony_0001',
                'token' => 'tony_0001'
            ];

            $result = $casino->AccountService->changePlayerPasswordWithTokenPUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
