<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostExternal
{
    /**
     * PostExternal constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "token_type": "web_cashier",
                "currency_id": "EUR",
                "login": "porter-9941",
                "first_name": "porter",
                "last_name": "porter",
                "password": "porter-9941",
                "email": "porter23@gmail.com",
                "day_phone": "1231",
                "evening_phone": "55221",
                "address_1": "fasdf12",
                "address_2": "asdf2",
                "city": "Fadf",
                "state": "Fadffer",
                "zip": "1234",
                "country": "EG",
                "cell_phone": "23123",
                "sms_message": false,
                "gender": true,
                "ip_address": "123123",
                "mac_address": "412412",
                "user_id": 0,
                "download_id": 0,
                "birth_date": "1992-08-30",
                "client_id": 0,
                "affiliate_id": 0,
                "put_in_affiliate_id": true,
                "called_from_casino": 0,
                "agent_id": "0",
                "current_position": 0,
                "third_party_id": "0",
                "skin_id": 0,
                "fax_back_received": true,
                "ignore_chargeback": true,
                "credit_card_agreement_received": true,
                "accept_promotion": true,
                "no_spam": true
            }';
            $result = $casino->player->postExternal($query);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}