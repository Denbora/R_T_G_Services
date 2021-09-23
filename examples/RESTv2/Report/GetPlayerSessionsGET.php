<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerSessionsGET extends RestExample
{
    /**
     * GetPlayerSessionsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'fromLogoutDate' => '2021-09-22 00:00:00',
                'toLogoutDate' => '2021-09-22 23:59:59',
                'includeNoGamePlay' => true,
                'login' => 'emmett123', // player login
            ];
            $result = $casino->ReportService->getPlayerSessionsGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
