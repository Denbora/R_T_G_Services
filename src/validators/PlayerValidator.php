<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class PlayerValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $PID
     * @param $errorPrefix
     * @return bool
     * @throws R_T_G_ValidationException
     */
    private function validatePID($PID, $errorPrefix): bool
    {
        if (empty($PID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($PID) && !is_numeric($PID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' . gettype($PID) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function validatePlayerCreation($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array('Player', 'ThirdPartyDataSync', 'UserID', 'MapToAffID', 'CalledFromCasino');
        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        foreach ($data as $key => $value) {
            if (empty($data[$key]) && !isset($data[$key])) {
                throw new R_T_G_ValidationException($errorPrefix . 'Required field - ' . $key . ' is missing');
            }
        }

        if (!is_array($data['Player'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Player should be array, ' .
                gettype($data["Player"]) . ' given');
        }

        if (!is_bool($data['ThirdPartyDataSync'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ThirdPartyDataSync should be bool, ' .
                gettype($data["ThirdPartyDataSync"]) . ' given');
        }

        if (!is_int($data['UserID']) && !is_numeric($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' .
                gettype($data["UserID"]) . ' given');
        }

        if (!is_bool($data['MapToAffID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MapToAffID should be bool, ' .
                gettype($data["MapToAffID"]) . ' given');
        }

        if (!is_bool($data['CalledFromCasino'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CalledFromCasino should be bool, ' .
                gettype($data["CalledFromCasino"]) . ' given');
        }

        $player = $data['Player'];

        if (empty($player['Login']) && empty($player['Password']) && empty($player['Contact']['CountryID']) && empty($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Required Player field(s) is missing');
        }

        if (!is_string($player['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be String, ' .
                gettype($player["Login"]) . ' given');
        }

        if (!is_string($player['Password'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Password should be String, ' .
                gettype($player["Password"]) . ' given');
        }

        if (!is_string($player['Contact']['CountryID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CountryID should be String, ' .
                gettype($player['Contact']['CountryID']) . ' given');
        }

        if (!is_string($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Email should be String, ' .
                gettype($player['Contact']['EMail']) . ' given');
        }

        if (strpos($player['Contact']['EMail'], '@') === false) {
            throw new R_T_G_ValidationException($errorPrefix . 'Invalid email address');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createPlayer($data): bool
    {
        return $this->validatePlayerCreation($data);
    }

    /**
     * @param $PID
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayer($PID): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($PID, $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPID($data): bool
    {
        $login = $data['Login'];
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (!is_string($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login should be string, ' . gettype($login) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function savePlayer($data): bool
    {
        return $this->validatePlayerCreation($data);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function updatePlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array('Player', 'ThirdPartyDataSync', 'UserID');
        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        foreach ($data as $key => $value) {
            if (empty($data[$key]) && !isset($data[$key])) {
                throw new R_T_G_ValidationException($errorPrefix . 'Required field - ' . $key . ' is missing');
            }
        }

        if (!is_array($data['Player'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Player should be array, ' .
                gettype($data["Player"]) . ' given');
        }

        if (!is_bool($data['ThirdPartyDataSync'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ThirdPartyDataSync should be bool, ' .
                gettype($data["ThirdPartyDataSync"]) . ' given');
        }

        if (!is_int($data['UserID']) && !is_numeric($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' . gettype($data["UserID"]) . ' given');
        }

        $player = $data['Player'];

        if (empty($player['Login']) && empty($player['Password']) &&
            empty($player['Contact']['CountryID']) && empty($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Required Player field(s) is missing');
        }

        if (!is_string($player['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be String, ' .
                gettype($player["Login"]) . ' given');
        }

        if (!is_string($player['Password'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Password should be String, ' .
                gettype($player["Password"]) . ' given');
        }

        if (!is_string($player['Contact']['CountryID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CountryID should be String, ' .
                gettype($player['Contact']['CountryID']) . ' given');
        }

        if (!is_string($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Email should be String, ' .
                gettype($player['Contact']['EMail']) . ' given');
        }

        if (strpos($player['Contact']['EMail'], '@') === false) {
            throw new R_T_G_ValidationException($errorPrefix . 'Invalid email address');
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function activatePlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (empty($data['UserID']) && !isset($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_int($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' .
                gettype($data['UserID']) . ' given');
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function banPlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (empty($data['BanType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'BanType is a required field');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_int($data['BanType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'BanType should be int, ' .
                gettype($data['BanType']) . ' given');
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerClass($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }


    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function changePasswordWithToken($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
        $fields = array('Login', 'NewPassword', 'Token');

        foreach ($fields as $value) {
            if (empty($data[$value])) {
                throw new R_T_G_ValidationException($errorPrefix . $value . ' is required field');
            }

            if (!is_string($data[$value])) {
                throw new R_T_G_ValidationException($errorPrefix . $value . ' should be string, ' .
                    gettype($data[$value]) . ' given');
            }
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function changePlayerClass($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is required field');
        }

        if (empty($data['playerClassID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'playerClassID is required field');
        }

        if (empty($data['UserID']) && $data['UserID'] !== 0) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID is required field');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_int($data['playerClassID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'playerClassID should be int, ' .
                gettype($data['playerClassID']) . ' given');
        }

        if (!is_int($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' .
                gettype($data['UserID']) . ' given');
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createPlayerAndToken($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array('Player', 'ThirdPartyDataSync', 'UserID', 'MapToAffID', 'CalledFromCasino', 'ApplicationName');
        if (!$this->allInArrayKeyExists($fields, $data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }

        if (!is_array($data['Player'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Player should be array, ' .
                gettype($data["Player"]) . ' given');
        }

        if (!is_bool($data['ThirdPartyDataSync'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ThirdPartyDataSync should be bool, ' .
                gettype($data["ThirdPartyDataSync"]) . ' given');
        }

        if (!is_int($data['UserID']) && !is_numeric($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' .
                gettype($data["UserID"]) . ' given');
        }

        if (!is_bool($data['MapToAffID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MapToAffID should be bool, ' .
                gettype($data["MapToAffID"]) . ' given');
        }

        if (!is_bool($data['CalledFromCasino'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CalledFromCasino should be bool, ' .
                gettype($data["CalledFromCasino"]) . ' given');
        }

        if (!is_string($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName should be string, ' .
                gettype($data["ApplicationName"]) . ' given');
        }

        $player = $data['Player'];

        if (empty($player['Login']) && empty($player['Password']) &&
            empty($player['Contact']['CountryID']) && empty($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Required Player field(s) is missing');
        }

        if (!is_string($player['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be String, ' .
                gettype($player["Login"]) . ' given');
        }

        if (!is_string($player['Password'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Password should be String, ' .
                gettype($player["Password"]) . ' given');
        }

        if (!is_string($player['Contact']['CountryID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CountryID should be String, ' .
                gettype($player['Contact']['CountryID']) . ' given');
        }

        if (!is_string($player['Contact']['EMail'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Email should be String, ' .
                gettype($player['Contact']['EMail']) . ' given');
        }

        if (strpos($player['Contact']['EMail'], '@') === false) {
            throw new R_T_G_ValidationException($errorPrefix . 'Invalid email address');
        }

        return true;
    }

    /**
     * @param array $data
     * @param $errorPrefix
     * @return bool
     * @throws R_T_G_ValidationException
     */
    private function deactivate($data, $errorPrefix)
    {
        if (empty($data['Login']) && !isset($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (empty($data['UserID']) && !isset($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_int($data['UserID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'UserID should be int, ' .
                gettype($data['UserID']) . ' given');
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function deactivatePlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->deactivate($data, $errorPrefix);
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function deactivateAndLogoutPlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->deactivate($data, $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function forgotPassword($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function forgotUsername($data): bool
    {
        $email = $data['Email'];
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($email) && !isset($email)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Email is a required field');
        }

        if (strpos($email, '@') === false) {
            throw new R_T_G_ValidationException($errorPrefix . 'Invalid email address');
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getAdjustedNetWinbyPID($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNonCashTotalbyPID($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getNonCashTotalbyPIDandDate($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (empty($data['BeginDate']) && !isset($data['BeginDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'BeginDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'EndDate is a required field');
        }

        if (!is_string($data['PID']) && !is_numeric($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!strtotime($data['BeginDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'BeginDate should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'EndDate should be DateTime!');
        }

        return true;
    }

    /**
     * @param array $data
     * @param $firstDate
     * @param $secondDate
     * @return bool
     * @throws R_T_G_ValidationException
     */
    private function deltaTime($data, $firstDate, $secondDate): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data[$firstDate]) && !isset($data[$firstDate])) {
            throw new R_T_G_ValidationException($errorPrefix . $firstDate . ' is a required field');
        }

        if (empty($data[$secondDate]) && !isset($data[$secondDate])) {
            throw new R_T_G_ValidationException($errorPrefix . $secondDate . ' is a required field');
        }

        if (!strtotime($data[$firstDate])) {
            throw new R_T_G_ValidationException($errorPrefix . $firstDate . 'should be DateTime!');
        }

        if (!strtotime($data[$secondDate])) {
            throw new R_T_G_ValidationException($errorPrefix . $secondDate . ' should be DateTime!');
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayers($data): bool
    {
        return $this->deltaTime($data, 'StartSignUpDate', 'EndSignUpDate');
    }

    protected function getPlayersActiveSessions($data): bool
    {
        if ($data != '') {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ValidationException($errorPrefix . 'getPlayersActiveSessions should be blank');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayersDelta($data): bool
    {
        return $this->deltaTime($data, 'StartUpdateDate', 'EndUpdateDate');
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayerPasscode($data): bool
    {
        $login = $data['Login'];
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($login) && !isset($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (!is_string($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login should be string, ' . gettype($login) . ' given');
        }
        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function resetPassword($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function unBanPlayer($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function validateCredentials($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login is a required field');
        }

        if (empty($data['HashedPassword'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'HashedPassword is a required field');
        }

        if (empty($data['ForMoney']) && !isset($data['ForMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForMoney is a required field');
        }

        if (empty($data['IP'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'IP is a required field');
        }

        if (!is_string($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Login should be string, ' .
                gettype($data['Login']) . ' given');
        }

        if (!is_string($data['HashedPassword'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'HashedPassword should be string, ' .
                gettype($data['HashedPassword']) . ' given');
        }

        if (!is_bool($data['ForMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ForMoney should be bool, ' .
                gettype($data['ForMoney']) . ' given');
        }

        if (!is_string($data['IP'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'IP should be string, ' .
                gettype($data['IP']) . ' given');
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getLedgerInformation($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->validatePID($data['PID'], $errorPrefix);
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getAuditTrailReport($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $dates = $this->deltaTime($data, 'startDate', 'endDate');

        if (!$dates) {
            throw new R_T_G_ValidationException($errorPrefix . 'Enter Dates');
        }

        $fields = array('area', 'pid', 'playerClass', 'gameId', 'users');

        foreach ($fields as $value) {
            if (!is_string($data[$value])) {
                throw new R_T_G_ValidationException($errorPrefix . $value . ' should be string, ' .
                    gettype($data[$value]) . ' given');
            }
            if (!isset($data[$value])) {
                throw new R_T_G_ValidationException($errorPrefix . $value . ' is required field');
            }
        }

        return true;
    }

    /**
     * @param array $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function logout($data): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['casinoId']) && !isset($data['casinoId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'casinoId is a required field');
        }

        if (empty($data['pid']) && !isset($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid is a required field');
        }

        if (empty($data['forMoney']) && !isset($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney is a required field');
        }

        if (empty($data['logoutType']) && !isset($data['logoutType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Logout Type is a required field');
        }

        if (!is_int($data['casinoId'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'casinoId should be int, ' .
                gettype($data['casinoId']) . ' given');
        }

        if (!is_string($data['pid'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'pid should be string, ' .
                gettype($data['pid']) . ' given');
        }

        if (!is_bool($data['forMoney'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'forMoney should be bool, ' .
                gettype($data['forMoney']) . ' given');
        }

        if (!is_int($data['logoutType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'logoutType should be int, ' .
                gettype($data['logoutType']) . ' given');
        }

        return true;
    }
}
