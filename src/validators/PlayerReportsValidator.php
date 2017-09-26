<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class PlayerReportsValidator extends BaseValidator implements ValidatorInterface
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
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerDepositors($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['DaysAgoLastBet']) && !isset($data['DaysAgoLastBet'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['DaysAgoLastBet']. ' is a required field');
        }

        if (!is_int($data['DaysAgoLastBet'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'DaysAgoLastBet should be int, ' .
                gettype($data['DaysAgoLastBet']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerDepositorsByDepositCount($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['DaysAgoLastBet']) && !isset($data['DaysAgoLastBet'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' DaysAgoLastBet is a required field');
        }

        if (empty($data['DepositCount']) && !isset($data['DepositCount'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' DepositCount is a required field');
        }

        if (!is_int($data['DaysAgoLastBet'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'DaysAgoLastBet should be int, ' .
                gettype($data['DaysAgoLastBet']) . ' given');
        }

        if (!is_int($data['DepositCount'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'DepositCount should be int, ' .
                gettype($data['DepositCount']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerFullGameStatsDetail($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['FromDate']) && !isset($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' FromDate is a required field');
        }

        if (empty($data['ToDate']) && !isset($data['ToDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' ToDate is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!strtotime($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' FromDate should be DateTime!');
        }

        if (!strtotime($data['ToDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' ToDate should be DateTime!');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerGameStats($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['LastUpdate']) && !isset($data['LastUpdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' LastUpdate is a required field');
        }

        if (empty($data['LoginFilter']) && !isset($data['LoginFilter'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' LoginFilter is a required field');
        }

        if (!isset($data['ForMoney']) && empty($data['ForMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForMoney is a required field');
        }

        if (!strtotime($data['LastUpdate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' LastUpdate should be DateTime!');
        }

        if (!is_string($data['LoginFilter'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'LoginFilter should be string, ' .
                gettype($data['LoginFilter']) . ' given');
        }

        if (!is_bool($data['ForMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForMoney should be bool, ' .
                gettype($data['ForMoney']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerLastGamesPlayed($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['PID']) && !isset($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' PID is a required field');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (isset($data['NumGames'])) {
            if (!is_int($data['NumGames'])) {
                throw new R_T_G_ValidationException($errorPrefix . 'NumGames should be int, ' .
                    gettype($data['NumGames']) . ' given');
            }
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerNonDepositors($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['DaysAgoSignup']) && !isset($data['DaysAgoSignup'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' DaysAgoSignup is a required field');
        }

        if (!is_int($data['DaysAgoSignup'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'DaysAgoSignup should be int, ' .
                gettype($data['DaysAgoSignup']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayersByDepositDate($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate should be DateTime!');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayersTransactions($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (empty($data['SkinId']) && !isset($data['SkinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' SkinId is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate should be DateTime!');
        }

        if (!is_int($data['SkinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinId should be int, ' .
                gettype($data['SkinId']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerTransactions($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (empty($data['SkinId']) && !isset($data['SkinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' SkinId is a required field');
        }

        if (empty($data['Pid']) && !isset($data['Pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' Pid is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate should be DateTime!');
        }

        if (!is_int($data['SkinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'SkinId should be int, ' .
                gettype($data['SkinId']) . ' given');
        }

        if (!is_string($data['Pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Pid should be string, ' .
                gettype($data['Pid']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerBalanceSummary($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (empty($data['Pid']) && !isset($data['Pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' Pid is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate should be DateTime!');
        }

        if (!is_string($data['Pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Pid should be string, ' .
                gettype($data['Pid']) . ' given');
        }
        return true;
    }
}
