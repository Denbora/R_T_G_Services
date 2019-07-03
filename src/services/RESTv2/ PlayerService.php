<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends RestV2Service implements RestServiceInterface
{
    const SERVICE_NAME = 'Player';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerClassesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerClasses', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updatePlayerPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdatePlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerClassGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerClass', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function setPlayerClassPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SetPlayerClass', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerLedgerGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerLedger', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerPasscodeGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerPasscode', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getActiveCouponDetailsByPlayerGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetActiveCouponDetailsByPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAdjustedNetWinGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAdjustedNetWin', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerPhoneNumberStatusGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerPhoneNumberStatus', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function setPlayerPhoneNumberStatusPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SetPlayerPhoneNumberStatus', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerNotesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerNotes', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function savePlayerNotesPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SavePlayerNotes', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerEmailVerificationStatusGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerEmailVerificationStatus', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function setPlayerEmailVerificationStatusPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SetPlayerEmailVerificationStatus', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountBalanceGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountBalance', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerCouponsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerCoupons', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerCouponDetailsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerCouponDetails', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function validateTokenGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ValidateToken', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getNonCashTotalGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNonCashTotal', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerBalanceSummaryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerBalanceSummary', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAllAccountsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAllAccounts', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreatePlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGamingActivityGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGamingActivity', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRsvsSummaryHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRsvsSummaryHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBaccaratHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBaccaratHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRouletteHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRouletteHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBlackjackHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBlackjackHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRequestedAndRedeemedCouponsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRequestedAndRedeemedCoupons', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function adjustPlayerCompPointsPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'AdjustPlayerCompPoints', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function resetSpecialFeaturesPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ResetSpecialFeatures', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function markPromotionAsVisitedPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'MarkPromotionAsVisited', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function externalPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'External', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createTokenPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateToken', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function recordFailedTransactionPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'RecordFailedTransaction', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function redeemPlayerCompPointsPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'RedeemPlayerCompPoints', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function redeemCouponPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'RedeemCoupon', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function discardCouponDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DiscardCoupon', $queryJSON);
    }
}
