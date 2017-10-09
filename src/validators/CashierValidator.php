<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class CashierValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param string $validatorName
     * @param mixed $data
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function call(string $validatorName, $data)
    {
        if (in_array($validatorName, $this->classMethods)) {
            $validator = $this->$validatorName($data);

            return $validator;
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $validatorName . ' does not exist');
        }
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getAvailableCoupons($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['pid'], 'pid', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->stringOrError($data['pid'], 'pid', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function redeemCoupon($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['casinoID'], 'casinoID', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->isEntered($data['couponCode'], 'couponCode', $errorPrefix);
        $this->isEntered($data['sessionID'], 'sessionID', $errorPrefix);
        $this->isEntered($data['skinID'], 'skinID', $errorPrefix);
        $this->isEntered($data['includeLiability'], 'includeLiability', $errorPrefix);

        $this->intOrError($data['casinoID'], 'casinoID', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        $this->stringOrError($data['couponCode'], 'couponCode', $errorPrefix);
        $this->intOrError($data['sessionID'], 'sessionID', $errorPrefix);
        $this->intOrError($data['skinID'], 'skinID', $errorPrefix);
        $this->stringOrError($data['includeLiability'], 'includeLiability', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function denyCoupon($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->isEntered($data['CouponCode'], 'CouponCode', $errorPrefix);
        $this->isEntered($data['addToRealAmount'], 'addToRealAmount', $errorPrefix);
        $this->isEntered($data['transactionComment'], 'transactionComment', $errorPrefix);
        $this->isEntered($data['ignoreIncompleteGames'], 'ignoreIncompleteGames', $errorPrefix);
        $this->isEntered($data['excludePlayerFromCoupon'], 'excludePlayerFromCoupon', $errorPrefix);

        $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        $this->stringOrError($data['CouponCode'], 'CouponCode', $errorPrefix);
        $this->intOrError($data['addToRealAmount'], 'addToRealAmount', $errorPrefix);
        $this->stringOrError($data['transactionComment'], 'transactionComment', $errorPrefix);
        $this->boolOrError($data['ignoreIncompleteGames'], 'ignoreIncompleteGames', $errorPrefix);
        $this->boolOrError($data['excludePlayerFromCoupon'], 'excludePlayerFromCoupon', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getActiveCouponCode($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['casinoId'], 'casinoId', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);

        $this->intOrError($data['casinoId'], 'casinoId', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getActiveCouponDetails($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['couponCode'], 'couponCode', $errorPrefix);
        $this->isEntered($data['playerID'], 'playerID', $errorPrefix);
        $this->isEntered($data['skinID'], 'skinID', $errorPrefix);

        $this->stringOrError($data['couponCode'], 'couponCode', $errorPrefix);
        $this->stringOrError($data['playerID'], 'playerID', $errorPrefix);
        $this->intOrError($data['skinID'], 'skinID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function cancelPlayerCoupon($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['couponCode'], 'couponCode', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);

        $this->stringOrError($data['couponCode'], 'couponCode', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getAvailableCouponsBasicInfo($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for getAvailableCouponsBasicInfo should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getCouponInfo($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['couponCode'], 'couponCode', $errorPrefix);

        $this->stringOrError($data['couponCode'], 'couponCode', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getCouponSummaryReport($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['startDate'], 'startDate', $errorPrefix);
        $this->isEntered($data['endDate'], 'endDate', $errorPrefix);

        $this->dateOrError($data['startDate'], 'startDate', $errorPrefix);
        $this->dateOrError($data['endDate'], 'endDate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayersActiveCoupons($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for getPlayersActiveCoupons should be empty');
        }

        return true;
    }
}
