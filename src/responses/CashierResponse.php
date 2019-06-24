<?php

namespace denbora\R_T_G_Services\responses;

class CashierResponse extends BaseResponse implements SoapResponseInterface
{
    /**
     * @param $response
     * @param $responseName
     * @return mixed|null
     */
    private function getCollectionData($response, $responseName)
    {
        $xml = $response->$responseName;
        $data = simplexml_load_string($xml);
        $array = (array)$data->NewDataSet;
        if (empty($array)) {
            return null;
        } else {
            return $array['Table'];
        }
    }

    /**
     * @param $response
     * @return mixed
     */
    public function rawResponse($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getAvailableCoupons($response)
    {
        return $response->GetAvailableCouponsResult->AvailableCoupon;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function redeemCoupon($response)
    {
        return $response->RedeemCouponWithLiabilityResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function denyCoupon($response)
    {
        return $response->DenyCouponResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getActiveCouponCode($response)
    {
        return $response->GetActiveCouponCodeResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getActiveCouponDetails($response)
    {
        return $response->GetActiveCouponDetailsBySkinIDResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function cancelPlayerCoupon($response)
    {
        return $response->CancelPlayerCouponResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getAvailableCouponsBasicInfo($response)
    {
        return $response->GetAvailableCouponsBasicInfoResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getCouponInfo($response)
    {
        return $response->GetCouponInfoResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getCouponSummaryReport($response)
    {
        return $response->GetCouponSummaryReportResult;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getPlayersActiveCoupons($response)
    {
        return $response->GetPlayersActiveCouponsResult;
    }
}
