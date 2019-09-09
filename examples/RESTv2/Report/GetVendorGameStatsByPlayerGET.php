<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetVendorGameStatsByPlayerGET extends RestExample
{
    /**
     * GetVendorGameStatsByPlayerGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'walletClientId' => 1,
                'startDate' => '2019-07-07',
                'endDate' => '2019-07-08',
//                'playerLogin' => 'tony_0003',
//                'vendorGameId' => '',
            ];

            $result = $casino->ReportService->getVendorGameStatsByPlayerGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
