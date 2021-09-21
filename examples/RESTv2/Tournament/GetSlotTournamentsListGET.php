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
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'status' => true,
                'startDate' => '2021-09-20',
                'endDate' => '2021-09-20',
            ];

            $result = $casino->TournamentService->getSlotTournamentsListGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
