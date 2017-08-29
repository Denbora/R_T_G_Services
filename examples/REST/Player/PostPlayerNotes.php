<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostPlayerNotes
{
    /**
     * PostPlayerNotes constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $data = '{
                "playerId": "10024193",
                "source": "test",
                "username": "porter-698",
                "comment": "test",
                "user_id": 0
            }';

            $result = $casino->player->postPlayerNotes($data);

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
