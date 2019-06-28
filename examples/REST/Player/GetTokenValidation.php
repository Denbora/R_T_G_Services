<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetTokenValidation
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                "playerId" => "10096980",
                "playerToken" => "1631A7B4-CF74-420C-ABEA-B1131B2429FFs",
                "applicationId" => "lobby_html5"
            ];

            $result = $casino->player->getTokenValidation(json_encode($query));

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
