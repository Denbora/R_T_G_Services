<?php


namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class PlayerValidator extends BaseValidator implements ValidatorInterface
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
    private function validatePlayerCreation($data) : bool
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

        if (empty($player['Login']) &&
            empty($player['Password']) &&
            empty($player['Contact']['CountryID']) &&
            empty($player['Contact']['EMail'])) {
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
     * @param int $pid
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPlayer($pid): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($pid)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($pid) && !is_numeric($pid)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($pid) . ' given');
        }

        return true;
    }

    /**
     * @param string $login
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getPID($login): bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (!is_string($login)) {
            throw new R_T_G_ValidationException($errorPrefix . 'login should be string, ' .
                gettype($login) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    protected function savePlayer($data) : bool
    {
        return $this->validatePlayerCreation($data);
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function updatePlayer($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array('Player', 'ThirdPartyDataSync', 'UserID', 'CalledFromCasino');
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

        if (!is_bool($data['CalledFromCasino'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CalledFromCasino should be bool, ' .
                gettype($data["CalledFromCasino"]) . ' given');
        }

        $player = $data['Player'];

        if (empty($player['Login']) &&
            empty($player['Password']) &&
            empty($player['Contact']['CountryID']) &&
            empty($player['Contact']['EMail'])) {
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
    protected function activatePlayer($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['Login'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'login is a required field');
        }

        if (empty($data['UserID'])) {
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
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function banPlayer($data) : bool
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
}
