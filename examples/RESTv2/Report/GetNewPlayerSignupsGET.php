<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetNewPlayerSignupsGET extends RestExample
{
    /**
     * GetNewPlayerSignupsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromDate' => '2019-07-07',
                'toDate' => '2019-07-08',
                'defaultAffiliateId' => 0
            ];

            $result = $casino->ReportService->getNewPlayerSignupsGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
