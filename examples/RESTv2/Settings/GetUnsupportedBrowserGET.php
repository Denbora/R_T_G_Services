<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Settings;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetUnsupportedBrowserGET extends RestExample
{
    /**
     * UnBanPlayerPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'client' => 'test',
                'skinId' => 1
            ];

            $result = $casino->SettingsService->getUnsupportedBrowserGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
