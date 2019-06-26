<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class JackpotValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getProgressiveJackpot($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['GameID']) && empty($data['GameID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameID is a required field');
        }

        if (!isset($data['MachineID']) && empty($data['MachineID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MachineID is a required field');
        }

        if (!isset($data['ForReal']) && empty($data['ForReal'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForReal is a required field');
        }

        if (!is_int($data['GameID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'GameID should be int, ' .
                gettype($data['GameID']) . ' given');
        }

        if (!is_int($data['MachineID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MachineID should be int, ' .
                gettype($data['MachineID']) . ' given');
        }

        if (!is_bool($data['ForReal'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForReal should be bool, ' .
                gettype($data['ForReal']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getProgressiveJackpots($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['ForReal']) && empty($data['ForReal'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForReal is a required field');
        }

        if (!is_bool($data['ForReal'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForReal should be bool, ' .
                gettype($data['ForReal']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getLastJackpotWinners($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['amountOfPlayers']) && empty($data['amountOfPlayers'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'amountOfPlayers is a required field');
        }

        if (!is_int($data['amountOfPlayers'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'amountOfPlayers should be int, ' .
                gettype($data['amountOfPlayers']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getLastJackpotWinnersBySkin($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['amountOfPlayers']) && empty($data['amountOfPlayers'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'amountOfPlayers is a required field');
        }

        if (!isset($data['skinId']) && empty($data['skinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'skinId is a required field');
        }

        if (!is_int($data['amountOfPlayers'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'amountOfPlayers should be int, ' .
                gettype($data['amountOfPlayers']) . ' given');
        }

        if (!is_int($data['skinId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'skinId should be int, ' .
                gettype($data['skinId']) . ' given');
        }

        return true;
    }
}
