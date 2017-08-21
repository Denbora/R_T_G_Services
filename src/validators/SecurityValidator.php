<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class SecurityValidator extends BaseValidator implements ValidatorInterface
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
     * @param string $pid
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createToken($pid) : bool
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
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function validateToken($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['Token'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Token is a required field');
        }

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($data['Token'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Token should be string, ' .
                gettype($data['Token']) . ' given');
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
    protected function validateTokenByApp($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName is a required field');
        }

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (empty($data['Token'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Token is a required field');
        }

        if (!is_string($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName should be string, ' .
                gettype($data['ApplicationName']) . ' given');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_string($data['Token'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Token should be string, ' .
                gettype($data['Token']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createTokenByApp($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName is a required field');
        }

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName should be string, ' .
                gettype($data['ApplicationName']) . ' given');
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
    protected function createGameRestrictedTokenByApp($data) : bool
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName is a required field');
        }

        if (empty($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($data['ApplicationName'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'ApplicationName should be string, ' .
                gettype($data['ApplicationName']) . ' given');
        }

        if (!is_string($data['PID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($data['PID']) . ' given');
        }

        if (!is_bool($data['CrossCasinoDisabled'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'CrossCasinoDisabled should be bool, ' .
                gettype($data['CrossCasinoDisabled']) . ' given');
        }

        if (!is_bool($data['Local'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Local should be bool, ' .
                gettype($data['Local']) . ' given');
        }
        return true;
    }
}
