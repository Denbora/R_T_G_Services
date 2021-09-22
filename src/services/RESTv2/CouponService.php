<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CouponService extends RestV3Service
{
    const SERVICE_NAME = 'Coupon';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function couponBatchResultsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CouponBatchResults', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCouponDetailsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCouponDetails', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCouponsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCoupons', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\PlayerService::getRequestedAndRedeemedCouponsGET()}
     */
    public function getRequestedAndRedeemedCouponsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRequestedAndRedeemedCoupons', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\PlayerService::redeemCouponPOST()}
     */
    public function redeemCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'RedeemCoupon', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\PlayerService::discardCouponDELETE()}
     */
    public function discardCouponDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DiscardCoupon', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function copyCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CopyCoupon', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function importCouponListPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ImportCouponList', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested. Use {@see \denbora\R_T_G_Services\services\RESTv3\CouponService::createBonusBalanceSingleUseFixedAmountOnRedemptionCouponPOST()}
     */
    public function createBonusBalanceSingleUseFixedAmountOnRedemptionCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(
            self::SERVICE_NAME,
            'CreateBonusBalanceSingleUseFixedAmountOnRedemptionCoupon',
            $queryJSON
        );
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested. Use {@see \denbora\R_T_G_Services\services\RESTv3\CouponService::createBonusBalanceSingleAccountFaPercentageOfNextDepositCouponPOST()}
     */
    public function createBonusBalanceSingleAccountFaPercentageOfNextDepositCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(
            self::SERVICE_NAME,
            'CreateBonusBalanceSingleAccountFaPercentageOfNextDepositCoupon',
            $queryJSON
        );
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested. Use {@see \denbora\R_T_G_Services\services\RESTv3\CouponService::createBonusBalanceSingleUseModFixedAmountNextDepositCouponPOST()}
     */
    public function createBonusBalanceSingleUseModFixedAmountNextDepositCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(
            self::SERVICE_NAME,
            'CreateBonusBalanceSingleUseModFixedAmountNextDepositCoupon',
            $queryJSON
        );
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested. Use {@see \denbora\R_T_G_Services\services\RESTv3\CouponService::createBonusBalanceSingleAccountModPercentageOfNextDepositCouponPOST()}
     */
    public function createBonusBalanceSingleAccountModPercentageOfNextDepositCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(
            self::SERVICE_NAME,
            'CreateBonusBalanceSingleAccountModPercentageOfNextDepositCoupon',
            $queryJSON
        );
    }
}
