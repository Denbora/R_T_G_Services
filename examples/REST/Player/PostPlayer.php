<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostPlayer
{
    /**
     * PostPlayer constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $data = '{
                "currency_id": "EUR",
                "login": "porter-6876",
                "first_name": "porter",
                "last_name": "porter",
                "password": "porter-6877",
                "email": "test6867@gmail.com",
                "day_phone": "12247454",
                "evening_phone": "12247454",
                "address_1": "adfadf",
                "address_2": "adfadf",
                "city": "test",
                "state": "test",
                "zip": "11545",
                "country": "EG",
                "cell_phone": "212121",
                "gender": "male",
                "user_id": 0,
                "download_id": 0,
                "birth_date": "1992-08-29",
                "client_id": 0,
                "affiliate_id": 0,
                "put_in_affiliate_id": false,
                "called_from_casino": 0,
                "agent_id": "0",
                "current_position": 0,
                "third_party_id": "0",
                "skin_id": 0,
                "fax_back_received": false,
                "ignore_chargeback": true,
                "credit_card_agreement_received": false,
                "accept_promotion": false,
                "no_spam": true
            }';

            $result = $casino->player->postPlayer($data);

            /*$restCall = $casino->getService('Rest');
            $login = 'porter-9821';
            $result = $restCall->getPid($login, true);*/

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
