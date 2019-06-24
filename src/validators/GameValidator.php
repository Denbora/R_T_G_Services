<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class GameValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGame($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['GameId'], 'GameId', $errorPrefix);
        $this->isEntered($data['MachineID'], 'MachineID', $errorPrefix);

        $this->intOrError($data['GameId'], 'GameId', $errorPrefix);
        $this->intOrError($data['MachineID'], 'MachineID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGames($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for getGames should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGamesBySkin($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['SkinId'], 'SkinId', $errorPrefix);
        $this->intOrError($data['SkinId'], 'SkinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getFlashCasinoConfiguration($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'Inputs for getGames should be empty');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getFlashGameInfo($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['GameId'], 'GameId', $errorPrefix);
        $this->isEntered($data['MachineID'], 'MachineID', $errorPrefix);
        $this->isEntered($data['includeMenu'], 'includeMenu', $errorPrefix);

        $this->intOrError($data['GameId'], 'GameId', $errorPrefix);
        $this->intOrError($data['MachineID'], 'MachineID', $errorPrefix);
        $this->boolOrError($data['includeMenu'], 'includeMenu', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getActiveGames($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['SkinId'], 'SkinId', $errorPrefix);
        $this->intOrError($data['SkinId'], 'SkinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getFlashGamesInfo($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
        $this->isEntered($data['includeMenu'], 'includeMenu', $errorPrefix);
        $this->boolOrError($data['includeMenu'], 'includeMenu', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getActiveFlashGamesInfo($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
        $this->isEntered($data['includeMenu'], 'includeMenu', $errorPrefix);
        $this->boolOrError($data['includeMenu'], 'includeMenu', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function resetPlayerSpecialFeatures($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getGameList($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['Type'], 'Type', $errorPrefix);
        $this->isEntered($data['SkinId'], 'SkinId', $errorPrefix);

        $this->intOrError($data['Type'], 'Type', $errorPrefix);
        $this->intOrError($data['SkinId'], 'SkinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getFlashGameList($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['Type'], 'Type', $errorPrefix);
        $this->isEntered($data['SkinId'], 'SkinId', $errorPrefix);

        $this->intOrError($data['Type'], 'Type', $errorPrefix);
        $this->intOrError($data['SkinId'], 'SkinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function lockUnlockGamesByPID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['PIDList'], 'PIDList', $errorPrefix);
        $this->isEntered($data['lockType'], 'lockType', $errorPrefix);
        $this->isEntered($data['transactionType'], 'transactionType', $errorPrefix);

        $this->stringOrError($data['PIDList'], 'PIDList', $errorPrefix);
        $this->intOrError($data['lockType'], 'lockType', $errorPrefix);
        $this->intOrError($data['transactionType'], 'transactionType', $errorPrefix);

        return true;
    }
}
