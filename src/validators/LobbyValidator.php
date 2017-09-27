<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class LobbyValidator extends BaseValidator implements ValidatorInterface
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
    protected function addToFavorite($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['optionId'], 'optionId', $errorPrefix);
        $this->isEntered($data['hands'], 'hands', $errorPrefix);
        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->isEntered($data['state'], 'state', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->intOrError($data['optionId'], 'optionId', $errorPrefix);
        $this->intOrError($data['hands'], 'hands', $errorPrefix);
        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);
        $this->boolOrError($data['state'], 'state', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function addToFavoriteByGame($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['gameId'], 'gameId', $errorPrefix);
        $this->isEntered($data['machId'], 'machId', $errorPrefix);
        $this->isEntered($data['hands'], 'hands', $errorPrefix);
        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->isEntered($data['state'], 'state', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->intOrError($data['gameId'], 'gameId', $errorPrefix);
        $this->intOrError($data['machId'], 'machId', $errorPrefix);
        $this->intOrError($data['hands'], 'hands', $errorPrefix);
        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);
        $this->boolOrError($data['state'], 'state', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getAccountBalance($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['casinoID'], 'casinoID', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->isEntered($data['forMoney'], 'forMoney', $errorPrefix);

        $this->intOrError($data['casinoID'], 'casinoID', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        $this->intOrError($data['forMoney'], 'forMoney', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getActiveMessages($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->isEntered($data['ForMoney'], 'ForMoney', $errorPrefix);
        $this->isEntered($data['messageStatus'], 'messageStatus', $errorPrefix);
        $this->isEntered($data['SkinID'], 'SkinID', $errorPrefix);

        $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        $this->intOrError($data['ForMoney'], 'ForMoney', $errorPrefix);
        $this->stringOrError($data['messageStatus'], 'messageStatus', $errorPrefix);
        $this->intOrError($data['SkinID'], 'SkinID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCacheState($data)
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
     */
    protected function getComponents($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getCurrentTheme($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getGameInformation($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['optionId'], 'optionId', $errorPrefix);
        $this->isEntered($data['PlayerID'], 'PlayerID', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->intOrError($data['optionId'], 'optionId', $errorPrefix);
        $this->stringOrError($data['PlayerID'], 'PlayerID', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getJackpot($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['optionId'], 'optionId', $errorPrefix);
        $this->isEntered($data['IsForReal'], 'IsForReal', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->intOrError($data['optionId'], 'optionId', $errorPrefix);
        $this->intOrError($data['IsForReal'], 'IsForReal', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getLanguageCode($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getLastGamesPlayed($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['PID'], 'PID', $errorPrefix);
        $this->isEntered($data['numGames'], 'numGames', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);
        $this->intOrError($data['numGames'], 'numGames', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getLocaleInfo($data)
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
     */
    protected function getMarquee($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['playerID'], 'playerID', $errorPrefix);
        $this->isEntered($data['isForReal'], 'isForReal', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->stringOrError($data['playerID'], 'playerID', $errorPrefix);
        $this->intOrError($data['isForReal'], 'isForReal', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getMenus($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getMenuStructure($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['menuId'], 'menuId', $errorPrefix);
        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->intOrError($data['menuId'], 'menuId', $errorPrefix);
        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getMobileMenu($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getRestrictedGames($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);

        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);
        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getSessionHash($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);
        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getTopGamesPlayed($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->isEntered($data['numberOfGames'], 'numberOfGames', $errorPrefix);
        $this->isEntered($data['playerId'], 'playerId', $errorPrefix);

        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['numberOfGames'], 'numberOfGames', $errorPrefix);
        $this->stringOrError($data['playerId'], 'playerId', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function getTopLocalAuslotJackpots($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['skinId'], 'skinId', $errorPrefix);
        $this->isEntered($data['numberOfJackpots'], 'numberOfJackpots', $errorPrefix);
        $this->isEntered($data['PID'], 'PID', $errorPrefix);

        $this->intOrError($data['skinId'], 'skinId', $errorPrefix);
        $this->intOrError($data['numberOfJackpots'], 'numberOfJackpots', $errorPrefix);
        $this->stringOrError($data['PID'], 'PID', $errorPrefix);

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function turnOnCacheState($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be empty');
        }

        return true;
    }
}
