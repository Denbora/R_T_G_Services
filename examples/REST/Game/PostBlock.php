<?php

namespace denbora\R_T_G_Services\examples\REST\Game;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostBlock
{
    /**
     * PostBlock constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "players": {
                    "players": [
                        {
                            "player_id": "10024193"
                        }
                    ]
                    },
                    "lock_type": 0,
                    "transaction_type": "block"
                }';
            $result = $casino->game->postBlock($query);

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
