<?php

namespace denbora\R_T_G_Services\examples\RESTv2\DataScience;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetRfmScoreForAllPlayersGET extends RestExample
{
    /**
     * GetRfmScoreForAllPlayersGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $result = $casino->DataScienceService->getRfmScoreForAllPlayersGET();
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
