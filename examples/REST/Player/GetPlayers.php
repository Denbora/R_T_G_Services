<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPlayers
{
    /**
     * GetPid constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'startDate' => '2017-08-09',    //optional
                'endDate' => '2017-08-10',      //optional
                'playerClassId' => 2,           //optional
                'email' => 'test@test.com'      //optional
            ];
            $result = $casino->player->getPlayers(json_encode($query));

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
