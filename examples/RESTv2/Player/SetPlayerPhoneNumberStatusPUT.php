<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class SetPlayerPhoneNumberStatusPUT extends RestExample
{
    /**
     * SetPlayerPhoneNumberStatusPUT constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'day_phone_status' => true,
                'night_phone_status' => true,
                'cell_phone_status' => true
            ];

            $result = $casino->PlayerService->setPlayerPhoneNumberStatusPUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
