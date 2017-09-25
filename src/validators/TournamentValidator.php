<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class TournamentValidator extends BaseValidator implements ValidatorInterface
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
    protected function getTournamentList($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['FromDate']) && !isset($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['FromDate']. ' is a required field');
        }

        if (empty($data['ToDate']) && !isset($data['ToDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['ToDate']. ' is a required field');
        }

        if (!isset($data['Status']) && empty($data['Status'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Status is a required field');
        }

        if (!strtotime($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['FromDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['ToDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['ToDate']. ' should be DateTime!');
        }

        if (!is_int($data['Status'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'Status should be int, ' .
                gettype($data['Status']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getTournamentDetails($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['TournamentID']) && !isset($data['TournamentID'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['TournamentID']. ' is a required field');
        }

        if (!is_int($data['TournamentID'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'TournamentID should be int, ' .
                gettype($data['TournamentID']) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getCasinoList($data)
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
    protected function getPlayerClassList($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!is_object($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'input should be object, ' .
                gettype($data) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getUnRestrictedTournaments($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (empty($data['casinoList']) && !isset($data['casinoList'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' casinoList is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['StartDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['EndDate']. ' should be DateTime!');
        }

        if (!is_object($data['casinoList'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'casinoList should be object, ' .
                gettype($data['casinoList']) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getRestrictedTournaments($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['FromDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' StartDate is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' EndDate is a required field');
        }

        if (empty($data['casinoList']) && !isset($data['casinoList'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' casinoList is a required field');
        }

        if (empty($data['playerClass']) && !isset($data['playerClass'])) {
            throw new R_T_G_ValidationException($errorPrefix . ' playerClass is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['StartDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['EndDate']. ' should be DateTime!');
        }

        if (!is_object($data['casinoList'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'casinoList should be object, ' .
                gettype($data['casinoList']) . ' given');
        }

        if (!is_object($data['playerClass'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'playerClass should be object, ' .
                gettype($data['playerClass']) . ' given');
        }
        return true;
    }
}
