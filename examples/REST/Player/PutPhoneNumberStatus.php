<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PutPhoneNumberStatus
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "playerId": "10096980",
                "day_phone_status": true,
                "night_phone_status": true,
                "cell_phone_status": true
            }';
            $result = $casino->player->putPhoneNumberStatus($query);

            echo "<pre>";
            print_r($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            print_r($e->getMessage());
            echo "</pre>";
        }
    }
}
