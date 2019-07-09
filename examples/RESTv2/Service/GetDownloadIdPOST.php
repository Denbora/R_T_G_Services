<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetDownloadIdPOST extends RestExample
{
    /**
     * GetPlayerClassesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'name' => 'string',
                'email' => 'string',
                'ip' => 'string',
                'version' => 0,
                'came_from' => 'string',
                'adId' => 0,
                'affiliate_id' => 0,
                'tracking_id' => 'string',
            ];

            $result = $casino->ServiceService->getDownloadIdPOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
