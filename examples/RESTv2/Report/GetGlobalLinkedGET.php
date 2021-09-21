<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetGlobalLinkedGET extends RestExample
{
    /**
     * GetGlobalLinkedGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'globalId' => 1,
            ];

            $result = $casino->ReportService->getGlobalLinkedGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
