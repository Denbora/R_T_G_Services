<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Game;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class BlockGamesPOST extends RestExample
{
    /**
     * BlockGamesPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'players' => [
                    'players' => [
                        ['player_id' => 10307426]
                    ]
                ],
                'lock_type' => 0,
                'transaction_type' => 'block',
            ];

            $result = $casino->GameService->blockGamesPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
