<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashierService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAvailableCoupons($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAvailableCoupons', 'GetAvailableCoupons');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function redeemCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'redeemCoupon', 'RedeemCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function denyCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'denyCoupon', 'DenyCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveCouponCode($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveCouponCode', 'GetActiveCouponCode');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveCouponDetails($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveCouponDetails', 'GetActiveCouponDetails');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function cancelPlayerCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'cancelPlayerCoupon', 'CancelPlayerCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getAvailableCouponsBasicInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAvailableCouponsBasicInfo', 'GetAvailableCouponsBasicInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCouponInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCouponInfo', 'GetCouponInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getCouponSummaryReport($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCouponSummaryReport', 'GetCouponSummaryReport');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getPlayersActiveCoupons($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersActiveCoupons', 'GetPlayersActiveCoupons');
    }
}
