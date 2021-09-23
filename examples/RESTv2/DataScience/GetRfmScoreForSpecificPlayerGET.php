<?php

namespace denbora\R_T_G_Services\examples\RESTv2\DataScience;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetRfmScoreForSpecificPlayerGET extends RestExample
{
    /**
     * GetRfmScoreForSpecificPlayerGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerId' => '10798420', //emmett123
            ];

            $result = $casino->DataScienceService->getRfmScoreForSpecificPlayerGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
