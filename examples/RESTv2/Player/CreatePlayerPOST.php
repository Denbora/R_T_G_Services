<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreatePlayerPOST extends RestExample
{
    /**
     * CreatePlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'currency_id' => 'AUD',
                'login' => 'tony_000222',
                'first_name' => 'Tony',
                'last_name' => 'Tester',
                'password' => '12345678',
                'email' => 'tony_0002@test.com',
                'day_phone' => '9111111',
                'evening_phone' => '9111111',
                'address_1' => 'Borshchagovka',
                'address_2' => 'Borsh',
                'city' => 'asdsad',
                'state' => 'asdsad',
                'zip' => '12222',
                'country' => 'DE',
                'cell_phone' => '+49 212112121',
                'sms_message' => true,
                'gender' => true,
                'ip_address' => '127.0.0.1',
                'mac_address' => '',
                'user_id' => 0,
                'download_id' => 35000,
                'birth_date' => '1995-06-14',
//                'client_id' => 0,
//                'affiliate_id' => 0,
//                'put_in_affiliate_id' => true,
                'called_from_casino' => 0,
//                'agent_id' => '',
//                'current_position' => 0,
//                'third_party_id' => '',
                'skin_id' => 1,
//                'fax_back_received' => true,
//                'ignore_chargeback' => true,
//                'credit_card_agreement_received' => true,
                'accept_promotion' => true,
                'no_spam' => true,
//                'wallet_login' => ''
            ];

            $result = $casino->PlayerService->createPlayerPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
