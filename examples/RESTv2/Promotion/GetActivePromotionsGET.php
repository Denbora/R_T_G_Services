<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Promotion;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetActivePromotionsGET extends RestExample
{
    /**
     * GetActivePromotionsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'playerLoginStatus' => 'AfterLogin',
                'playerId' => '10307426'
            ];

            $result = $casino->PromotionService->getActivePromotionsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
