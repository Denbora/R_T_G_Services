<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Account;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ValidateCredentialsPOST extends RestExample
{
    /**
     * UnBanPlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'login' => 'charlotteaud',
                'hashedPassword' => '4EF6BA010DCD8E0A79A85FE59CF1BF46DEA3788E2B760AC84BE445EBDC6D8CB64ABCD9F026741FDF417F3BF034388B28FC9927DFC6B6D1651FF71A210A828E2B',
                'forMoney' => false,
                'ipAddress	' => '84.22.106.52',
            ];

            $result = $casino->AccountService->validateCredentialsPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
