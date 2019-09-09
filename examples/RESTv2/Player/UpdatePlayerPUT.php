<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class UpdatePlayerPUT extends RestExample
{
    /**
     * UpdatePlayerPUT constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'login' => 'testTest',
                'first_name' => 'Petro',
                'last_name' => 'Ortoped',
                'password' => '123456',
                'email' => 'test@test.com',
                'day_phone' => '1234567890',
                'evening_phone' => '1234567890',
                'address_1' => 'October',
                'address_2' => 'October',
                'city' => 'City',
                'state' => 'City',
                'zip' => '1245',
                'country' => 'UK',
                'cell_phone' => '1234567980',
                'sms_message' => true,
                'gender' => true,
                'ip_address' => '127.0.0.1',
                'mac_address' => '',
                'user_id' => 0,
                'download_id' => 0,
                'birth_date' => '2019-07-05',
                'client_id' => 0,
                'affiliate_id' => 0,
                'put_in_affiliate_id' => true,
                'called_from_casino' => 0,
                'agent_id' => '',
                'current_position' => 0,
                'third_party_id' => '',
                'skin_id' => 0,
                'fax_back_received' => true,
                'ignore_chargeback' => true,
                'credit_card_agreement_received' => true,
                'accept_promotion' => true,
                'no_spam' => true,
                'wallet_login' => 'testTest'
            ];

            $result = $casino->PlayerService->updatePlayerPUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
