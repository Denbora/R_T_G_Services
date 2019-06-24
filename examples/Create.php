<?php

namespace denbora\R_T_G_Services\examples;

use denbora\R_T_G_Services\casino\Casino;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class Create
{
    public static function printForm()
    {
        echo file_get_contents('form/form.html');
    }

    /**
     * @param $data
     * @param Casino $casino
     * @throws R_T_G_ServiceException
     */
    public static function savePlayer($data, Casino $casino)
    {
        if ($data["Password"] === $data["Password-repeat"]) {
            unset($data["Password-repeat"]);
        } else {
            echo "error";
        }

        $createData = array(
            'Player' => $data,
            'ThirdPartyDataSync' => false,
            'UserID' => 0,
            'MapToAffID' => false,
            'CalledFromCasino' => false
        );

        $playerService = $casino->getService('Player');

        $result = $playerService->call('savePlayer', $createData);

        echo "<pre>";
        var_dump($result);
    }
}
