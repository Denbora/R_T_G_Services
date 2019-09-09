<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class AdjustPlayerCompPointsPUT extends RestExample
{
    /**
     * AdjustPlayerCompPointsPUT constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10307426',
                'user_type' => 'player',
                'amount' => 200,
                'comment' => 'testing'
            ];

            $result = $casino->PlayerService->adjustPlayerCompPointsPUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
