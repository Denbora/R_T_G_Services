<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class GameHistoryValidator extends BaseValidator implements ValidatorInterface
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
    protected function getBaccaratHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['Login']) && empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login is a required field');
        }

        if (!isset($data['pid']) && empty($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid is a required field');
        }

        if (!isset($data['forMoney']) && empty($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_string($data['pid']) && !is_numeric($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid should be string, ' .
                gettype($data['pid']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data["forMoney"]) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @throws R_T_G_ValidationException
     */
    protected function getGameDetailXML($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['GameId']) && empty($data['GameId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameId is a required field');
        }

        if (!isset($data['MachID']) && empty($data['MachID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MachID is a required field');
        }

        if (!isset($data['GameNumber']) && empty($data['GameNumber'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameNumber is a required field');
        }

        if (!is_int($data['GameId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameId should be int, ' .
                gettype($data['GameId']) . ' given');
        }

        if (!is_int($data['MachID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MachID should be int, ' .
                gettype($data['MachID']) . ' given');
        }

        if (!is_int($data['GameNumber'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameNumber should be int, ' .
                gettype($data['GameNumber']) . ' given');
        }
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getBlackjackHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['Login']) && empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!isset($data['forMoney']) && empty($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data["forMoney"]) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function playerGamingActivity($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!isset($data['forMoney']) && empty($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data["forMoney"]) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRouletteHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['Login']) && empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login is a required field');
        }

        if (!isset($data['PID']) && empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!isset($data['forMoney']) && empty($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (!isset($data['machID']) && empty($data['machID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'machID is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data["forMoney"]) . ' given');
        }

        if (!is_int($data['machID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'machID should be int, ' .
                gettype($data['machID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRSVSSummaryHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['Login']) && empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login is a required field');
        }

        if (!isset($data['pid']) && empty($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid is a required field');
        }

        if (!isset($data['forMoney']) && empty($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (!isset($data['machID']) && empty($data['machID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'machID is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_string($data['pid']) && !is_numeric($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid should be string, ' .
                gettype($data['pid']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data["forMoney"]) . ' given');
        }

        if (!is_int($data['machID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'machID should be int, ' .
                gettype($data['machID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRSVSGameDetailsHistory($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['GameNumber']) && empty($data['GameNumber'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameNumber is a required field');
        }

        if (!is_int($data['GameNumber'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameNumber should be int, ' .
                gettype($data['GameNumber']) . ' given');
        }

        return true;
    }


    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRSVSGameDetailsHistoryWithIcons($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['gamenum']) && empty($data['gamenum'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'gamenum is a required field');
        }

        if (!is_int($data['gamenum'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'gamenum should be int, ' .
                gettype($data['gamenum']) . ' given');
        }

        return true;
    }
}
