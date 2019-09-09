<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Wallet;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class SubscribeNotificationPOST extends RestExample
{
    /**
     * SubscribeNotificationPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'login' => 'tony',
                'clientId' => '0',
                'url' => 'string',
                'api_key' => 'string',
                'api_key_usage' => 'none'
            ];

            $result = $casino->WalletService->subscribeNotificationPOST(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
