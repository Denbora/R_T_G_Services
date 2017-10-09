<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashierService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @param $validatorName
     * @param $service
     * @return object
     */
    private function run($data, bool $rawResponse, $validatorName, $service)
    {
        $this->validator->call($validatorName, $data);

        return $this->service($service, $data, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getAvailableCoupons($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAvailableCoupons', 'GetAvailableCoupons');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function redeemCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'redeemCoupon', 'RedeemCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function denyCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'denyCoupon', 'DenyCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getActiveCouponCode($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveCouponCode', 'GetActiveCouponCode');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getActiveCouponDetails($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveCouponDetails', 'GetActiveCouponDetails');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function cancelPlayerCoupon($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'cancelPlayerCoupon', 'CancelPlayerCoupon');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getAvailableCouponsBasicInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getAvailableCouponsBasicInfo', 'GetAvailableCouponsBasicInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getCouponInfo($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCouponInfo', 'GetCouponInfo');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getCouponSummaryReport($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCouponSummaryReport', 'GetCouponSummaryReport');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersActiveCoupons($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersActiveCoupons', 'GetPlayersActiveCoupons');
    }
}
