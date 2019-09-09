<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Promotion;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPromotionStatisticsGET extends RestExample
{
    /**
     * GetPromotionStatisticsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'promotionId' => 0,
                'startPeriod' => '2019-07-07',
                'endPeriod' => '2019-07-08'
            ];

            $result = $casino->PromotionService->getPromotionStatisticsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
