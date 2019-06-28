<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetClasses
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $result = $casino->player->getClasses();

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
