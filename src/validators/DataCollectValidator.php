<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class DataCollectValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStats($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['LastUpdate'], 'LastUpdate', $errorPrefix);
        $this->isEntered($data['ForMoney'], 'ForMoney', $errorPrefix);

        $this->dateOrError($data['LastUpdate'], 'LastUpdate', $errorPrefix);
        $this->boolOrError($data['ForMoney'], 'ForMoney', $errorPrefix);

        if (isset($data['LoginFilter'])) {
            $this->stringOrError($data['LoginFilter'], 'LoginFilter', $errorPrefix);
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStatsByDateRange($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['ForMoney'], 'ForMoney', $errorPrefix);

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);
        $this->boolOrError($data['ForMoney'], 'ForMoney', $errorPrefix);

        if (isset($data['LoginFilter'])) {
            $this->stringOrError($data['LoginFilter'], 'LoginFilter', $errorPrefix);
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerSessions($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromLogoutDate'], 'FromLogoutDate', $errorPrefix);
        $this->isEntered($data['ToLogoutDate'], 'ToLogoutDate', $errorPrefix);
        $this->isEntered($data['IncludeNoGameplay'], 'IncludeNoGameplay', $errorPrefix);

        $this->dateOrError($data['FromLogoutDate'], 'FromLogoutDate', $errorPrefix);
        $this->dateOrError($data['ToLogoutDate'], 'ToLogoutDate', $errorPrefix);
        $this->boolOrError($data['IncludeNoGameplay'], 'IncludeNoGameplay', $errorPrefix);
        if (isset($data['Login'])) {
            $this->stringOrError($data['Login'], 'Login', $errorPrefix);
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayer21GamesHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $fields = array(
            'ai_casino_id',
            'as_player_login',
            'ai_mach_id',
            'ad_start_date',
            'ad_end_date',
            'ai_num_games',
            'ab_show_images'
        );

        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        $this->intOrError($data['ai_casino_id'], 'ai_casino_id', $errorPrefix);
        $this->stringOrError($data['as_player_login'], 'as_player_login', $errorPrefix);
        $this->intOrError($data['ai_mach_id'], 'ai_mach_id', $errorPrefix);
        $this->dateOrError($data['ad_start_date'], 'ad_start_date', $errorPrefix);
        $this->dateOrError($data['ad_end_date'], 'ad_end_date', $errorPrefix);
        $this->intOrError($data['ai_num_games'], 'ai_num_games', $errorPrefix);
        $this->boolOrError($data['ab_show_images'], 'ab_show_images', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCasinoStats($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['RequestDate'], 'RequestDate', $errorPrefix);
        $this->dateOrError($data['RequestDate'], 'RequestDate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStatsDetail($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);

        if (isset($data['PID'])) {
            $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        }

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStatsDetailByGame($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['gameId'], 'gameId', $errorPrefix);
        $this->isEntered($data['machId'], 'machId', $errorPrefix);

        if (isset($data['PID'])) {
            $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        }

        $this->intOrError($data['gameId'], 'gameId', $errorPrefix);
        $this->intOrError($data['machId'], 'machId', $errorPrefix);
        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStatsDetailByGameBySession($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['gameId'], 'gameId', $errorPrefix);
        $this->isEntered($data['machId'], 'machId', $errorPrefix);

        if (isset($data['PID'])) {
            $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        }

        $this->intOrError($data['gameId'], 'gameId', $errorPrefix);
        $this->intOrError($data['machId'], 'machId', $errorPrefix);
        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStatsBySession($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGameIDs($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getLocalCurrency($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGameDetailSummary($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['GameID'], 'GameID', $errorPrefix);

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);
        $this->intOrError($data['GameID'], 'GameID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCasinoSummaryData($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['StartDate'], 'StartDate', $errorPrefix);
        $this->isEntered($data['EndDate'], 'EndDate', $errorPrefix);
        $this->isEntered($data['forMoney'], 'forMoney', $errorPrefix);

        $this->dateOrError($data['StartDate'], 'StartDate', $errorPrefix);
        $this->dateOrError($data['EndDate'], 'EndDate', $errorPrefix);
        $this->intOrError($data['forMoney'], 'forMoney', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCasinoSummaryByAffiliate($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['StartDate'], 'StartDate', $errorPrefix);
        $this->isEntered($data['EndDate'], 'EndDate', $errorPrefix);
        $this->isEntered($data['affiliateID'], 'affiliateID', $errorPrefix);

        $this->dateOrError($data['StartDate'], 'StartDate', $errorPrefix);
        $this->dateOrError($data['EndDate'], 'EndDate', $errorPrefix);
        $this->intOrError($data['affiliateID'], 'affiliateID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCasinoSummaryDataBySkin($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['StartDate'], 'StartDate', $errorPrefix);
        $this->isEntered($data['EndDate'], 'EndDate', $errorPrefix);
        $this->isEntered($data['forMoney'], 'forMoney', $errorPrefix);
        $this->isEntered($data['SkinIDs'], 'SkinIDs', $errorPrefix);
        $this->isEntered($data['ClientIDs'], 'ClientIDs', $errorPrefix);

        $this->dateOrError($data['StartDate'], 'StartDate', $errorPrefix);
        $this->dateOrError($data['EndDate'], 'EndDate', $errorPrefix);
        $this->intOrError($data['forMoney'], 'forMoney', $errorPrefix);
        $this->stringOrError($data['SkinIDs'], 'SkinIDs', $errorPrefix);
        $this->stringOrError($data['ClientIDs'], 'ClientIDs', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRSVSJackpotsByPID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['ForMoney'], 'ForMoney', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);
        $this->intOrError($data['ForMoney'], 'ForMoney', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRSVSJackpotsAll($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['FromDate'], 'FromDate', $errorPrefix);
        $this->isEntered($data['ToDate'], 'ToDate', $errorPrefix);
        $this->isEntered($data['ForMoney'], 'ForMoney', $errorPrefix);

        $this->dateOrError($data['FromDate'], 'FromDate', $errorPrefix);
        $this->dateOrError($data['ToDate'], 'ToDate', $errorPrefix);
        $this->intOrError($data['ForMoney'], 'ForMoney', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNewDepositors($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['startdate'], 'startdate', $errorPrefix);
        $this->isEntered($data['enddate'], 'enddate', $errorPrefix);

        $this->dateOrError($data['startdate'], 'startdate', $errorPrefix);
        $this->dateOrError($data['enddate'], 'enddate', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNewDepositorsBySkin($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['startdate'], 'startdate', $errorPrefix);
        $this->isEntered($data['enddate'], 'enddate', $errorPrefix);
        $this->isEntered($data['SkinIDs'], 'SkinIDs', $errorPrefix);
        $this->isEntered($data['ClientIDs'], 'ClientIDs', $errorPrefix);

        $this->dateOrError($data['startdate'], 'startdate', $errorPrefix);
        $this->dateOrError($data['enddate'], 'enddate', $errorPrefix);
        $this->stringOrError($data['SkinIDs'], 'SkinIDs', $errorPrefix);
        $this->stringOrError($data['ClientIDs'], 'ClientIDs', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function generateReport($data)
    {
        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function generateReportWithFormat($data)
    {
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getBaccaratGamesHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['ai_casino_id'], 'ai_casino_id', $errorPrefix);
        $this->isEntered($data['as_player_login'], 'as_player_login', $errorPrefix);
        $this->isEntered($data['ai_mach_id'], 'ai_mach_id', $errorPrefix);
        $this->isEntered($data['ad_start_date'], 'ad_start_date', $errorPrefix);
        $this->isEntered($data['ad_end_date'], 'ad_end_date', $errorPrefix);
        $this->isEntered($data['ai_num_games'], 'ai_num_games', $errorPrefix);
        $this->isEntered($data['ab_show_images'], 'ab_show_images', $errorPrefix);

        $this->intOrError($data['ai_casino_id'], 'ai_casino_id', $errorPrefix);
        $this->stringOrError($data['as_player_login'], 'as_player_login', $errorPrefix);
        $this->stringOrError($data['ai_mach_id'], 'ai_mach_id', $errorPrefix);
        $this->dateOrError($data['ad_start_date'], 'ad_start_date', $errorPrefix);
        $this->dateOrError($data['ad_end_date'], 'ad_end_date', $errorPrefix);
        $this->boolOrError($data['ab_show_images'], 'ab_show_images', $errorPrefix);
        $this->intOrError($data['ai_num_games'], 'ai_num_games', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRouletteGamesHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['ai_casino_id'], 'ai_casino_id', $errorPrefix);
        $this->isEntered($data['as_player_login'], 'as_player_login', $errorPrefix);
        $this->isEntered($data['ai_mach_id'], 'ai_mach_id', $errorPrefix);
        $this->isEntered($data['ad_start_date'], 'ad_start_date', $errorPrefix);
        $this->isEntered($data['ad_end_date'], 'ad_end_date', $errorPrefix);
        $this->isEntered($data['ai_num_games'], 'ai_num_games', $errorPrefix);
        $this->isEntered($data['ab_show_images'], 'ab_show_images', $errorPrefix);

        $this->intOrError($data['ai_casino_id'], 'ai_casino_id', $errorPrefix);
        $this->stringOrError($data['as_player_login'], 'as_player_login', $errorPrefix);
        $this->stringOrError($data['ai_mach_id'], 'ai_mach_id', $errorPrefix);
        $this->dateOrError($data['ad_start_date'], 'ad_start_date', $errorPrefix);
        $this->dateOrError($data['ad_end_date'], 'ad_end_date', $errorPrefix);
        $this->boolOrError($data['ab_show_images'], 'ab_show_images', $errorPrefix);
        $this->intOrError($data['ai_num_games'], 'ai_num_games', $errorPrefix);

        return true;
    }
}
