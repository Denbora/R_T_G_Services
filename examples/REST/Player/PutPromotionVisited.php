<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PutPromotionVisited
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'playerId' => '10096980',
                'promotionId' => '11'
            ];
            $result = $casino->player->putPromotionVisited(json_encode($query));

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
