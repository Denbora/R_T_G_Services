<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Tournament;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetSlotTournamentsListGET extends RestExample
{
    /**
     * GetSlotTournamentsListGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'status' => 'all',
                'startDate' => '2021-09-22 00:00:00',
                'endDate' => '2021-09-22 23:59:59',
            ];

            $result = $casino->TournamentService->getSlotTournamentsListGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
