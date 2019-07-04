<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetPlayer
{
    /**
     * GetPlayer constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'email' => 'test@test.com'
            ];

            $result = $casino->player->getPlayer(json_encode($query));

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e->getMessage());
            echo "</pre>";
        }
    }
}
