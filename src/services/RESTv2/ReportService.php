<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\responses\RestResponse;
use denbora\R_T_G_Services\validators\ValidatorInterface;

class ReportService extends RestV2Service
{
    const SERVICE_NAME = 'Report';

    /**
     * SettingsService constructor.
     * @param string $certificate
     * @param string $key
     * @param string $password
     * @param ValidatorInterface $validator
     * @param RestResponse $response
     * @param string $baseUrl
     * @param string $apiKey
     * @param array $options
     */
    public function __construct(
        string $certificate,
        string $key,
        string $password,
        ValidatorInterface $validator,
        RestResponse $response,
        string $baseUrl,
        string $apiKey,
        $options = []
    ) {
        $this->setTimeout(80);
        parent::__construct($certificate, $key, $password, $validator, $response, $baseUrl, $apiKey, $options);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getJackpotGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetJackpot', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getActiveSessionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetActiveSessions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAffiliatesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAffiliates', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\AffiliateService::getGlobalLinkedGET()}
     */
    public function getGlobalLinkedGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGlobalLinked', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getOptInStatisticsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetOptInStatistics', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getNonDepositorsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNonDepositors', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getDepositorsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDepositors', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getSideBetsStatisticsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetSideBetsStatistics', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGameDetailSummaryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGameDetailSummary', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAllTopGamesPlayedGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAllTopGamesPlayed', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getLastGamesPlayedGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetLastGamesPlayed', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\AffiliateService::getPlayersSessionsHistoryGET()}
     */
    public function getPlayersSessionsHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayersSessionsHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAffiliatesStatsSummaryDailyGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAffiliatesStatsSummaryDaily', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAffiliatesStatsSummaryHourlyGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAffiliatesStatsSummaryHourly', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGamingSummaryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGamingSummary', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountHistoryByDateRangeGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountHistoryByDateRange', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerDepositorsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerDepositors', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerTransactionHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerTransactionHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerDepositWithdrawalHistoryGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerDepositWithdrawalHistory', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getTopGamesPlayedGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetTopGamesPlayed', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\AffiliateService::getNewPlayerSignUpsGET()}
     */
    public function getNewPlayerSignupsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNewPlayerSignups', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\AffiliateService::getPlayersSummaryGET()}
     */
    public function getPlayerSummaryAllGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerSummaryAll', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerGameStatisticsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerGameStatistics', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGamingActivityReportGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGamingActivityReport', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayedGamesJackpotGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayedGamesJackpot', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerSessionsDayOfWeekGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerSessionsDayOfWeek', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerFullGameStatsDetailGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerFullGameStatsDetail', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerGameStatsByDateRangeGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerGameStatsByDateRange', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getGamingStatsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetGamingStats', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function getVendorGameStatsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetVendorGameStats', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAllAccountsDeltaGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAllAccountsDelta', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getEmailVerifyReportGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetEmailVerifyReport', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function thirdPartyOptInOptOutGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ThirdPartyOptInOptOut', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerSessionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerSessions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function getVendorGameStatsByPlayerGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetVendorGameStatsByPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function thirdPartyGameStatsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ThirdPartyGameStats', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerGameStatsDetailByGameGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerGameStatsDetailByGame', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayedGamesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayedGames', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerTransactionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerTransactions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAuditTrailReportGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAuditTrailReport', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerTransactionsPerSkinGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerTransactionsPerSkin', $queryJSON);
    }
}
