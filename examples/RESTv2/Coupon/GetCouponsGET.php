<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Coupon;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetCouponsGET extends RestExample
{
    /**
     * GetCouponsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2019-07-01',
                'endDate' => '2019-07-07',
                'status' => 'active', //all|active|notYetActive|expired|redeemed|void
            ];

            $result = $casino->CouponService->getCouponsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
