<?php

namespace denbora\R_T_G_Services\examples\REST\Player;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostTransactionFailed
{
    /**
     * GetClass constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = [
                'playerId' => '10000394',
                'login' => 'mariatest9',
                "locatorName" => "string",
                'methodID' => 0,
                'type' => 0,
                'amount' => 0,
                'tracking1' => "string",
                'tracking2' => "string",
                'Tracking3' => "string",
                'Tracking4' => "string"
            ];

            $result = $casino->player->postTransactionFailed(json_encode($query));

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
