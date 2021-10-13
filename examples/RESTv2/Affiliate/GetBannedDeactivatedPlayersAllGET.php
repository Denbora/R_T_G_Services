<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Affiliate;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetBannedDeactivatedPlayersAllGET extends RestExample
{
    /**
     * GetBannedDeactivatedPlayersAllGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2021-09-22 00:00:00',
                'endDate' => '2021-09-22 03:59:59'
            ];

            $result = $casino->AffiliateService->getBannedDeactivatedPlayersAllGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
