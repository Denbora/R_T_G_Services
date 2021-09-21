<?php

namespace denbora\R_T_G_Services\examples\RESTv2\DataScience;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayersOfSegmentGET extends RestExample
{
    /**
     * GetPlayersOfSegmentGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerSegmentId' => '10307426',
            ];

            $result = $casino->DataScienceService->getPlayersOfSegmentGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
