<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Helper;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ManualSendRequest
{
    /**
     * ActivatePlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $result = $casino->HelperService->manualSendRequest(
                'post',
                'http://microservice.loc/mrc/api/players?apiKey=123456', //url query
                '{"currency_id":"USD","login":"tonyTester13","first_name":"Test","last_name":"Test","password":"password","email":"tonyTester13@email.com","day_phone":"+65456423185684","evening_phone":"+65456423185684","address_1":"address_1","address_2":"","city":"city","state":"state","zip":"zip","country":"US","cell_phone":"+65456423185684","sms_message":false,"gender":true,"ip_address":"172.18.0.1","mac_address":"","user_id":0,"client_id":5,"download_id":4889003,"birth_date":"1996-02-15","called_from_casino":0,"skin_id":1,"accept_promotion":false,"no_spam":true}' //json
            );
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
