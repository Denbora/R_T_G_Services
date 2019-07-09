<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Jackpot;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetJackpotWinnersGET extends RestExample
{
    /**
     * GetJackpotWinnersGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2019-07-07',
                'endDate' => '2019-07-08',
                'numberOfWinners' => 1,
            ];

            $result = $casino->JackpotService->getJackpotWinnersGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
