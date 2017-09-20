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
                "login": "porter556595q6",
                "first_name": "tests",
                "last_name": "tests",
                "password": "12345678",
                "email": "toster220qq6@gmail.com",
                "day_phone": "12345",
                "evening_phone": "12345",
                "address_1": "asdfasdf",
                "address_2": "awwetqqewt",
                "city": "",
                "state": "",
                "zip": "",
                "country": "US",
                "cell_phone": "",
                "sms_message": false,
                "gender": true,
                "ip_address": "127.0.0.1",
                "mac_address": "",
                "user_id": 0,
                "download_id": 0,
                "birth_date": "1991-08-03T09:37:07.085Z",
                "called_from_casino": 0,
                "skin_id": 1,
                "no_spam": true
            }';
            $result = $casino->player->postPlayer($data);

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
