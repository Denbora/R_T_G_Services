<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Coupon;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetRequestedAndRedeemedCouponsGET extends RestExample
{
    /**
     * GetRequestedAndRedeemedCouponsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2019-07-01',
                'endDate' => '2019-07-07',
                'couponStatus' => 'active',
                'couponCode' => 'active',
            ];

            $result = $casino->CouponService->getRequestedAndRedeemedCouponsGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
