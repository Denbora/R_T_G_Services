<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class DownloadValidator extends BaseValidator implements ValidatorInterface
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
    protected function generateDownloadID($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data) && empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'data is required');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be array, ' .
                gettype($data) . ' given');
        }

        return true;
    }

    /**
     * @param $PID
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByPID($PID)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($PID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID is a required field');
        }

        if (!is_string($PID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'PID should be string, ' .
                gettype($PID) . ' given');
        }

        return true;
    }

    /**
     * @param $DID
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByDID($DID)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($DID) && !isset($DID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'DID is a required field');
        }

        if (!is_int($DID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'DID should be int, ' .
                gettype($DID) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByDates($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['StartDate']) && !isset($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['StartDate']. ' is a required field');
        }

        if (empty($data['EndDate']) && !isset($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['EndDate']. ' is a required field');
        }

        if (!strtotime($data['StartDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['StartDate'] . 'should be DateTime!');
        }

        if (!strtotime($data['EndDate'])) {
            throw new R_T_G_ValidationException($errorPrefix . $data['EndDate']. ' should be DateTime!');
        }
        return true;
    }

    /**
     * @param $AffiliatedID
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByAffId($AffiliatedID)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($AffiliatedID) && !isset($AffiliatedID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'AffiliatedID is a required field');
        }

        if (!is_int($AffiliatedID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'AffiliatedID should be int, ' .
                gettype($AffiliatedID) . ' given');
        }
    }

    /**
     * @param $TrackingID
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByTracking($TrackingID)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($TrackingID) && !isset($TrackingID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'TrackingID is a required field');
        }

        if (!is_string($TrackingID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'TrackingID should be string, ' .
                gettype($TrackingID) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadInformationByAIDPeriod($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data) && empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'data is required');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be array, ' .
                gettype($data) . ' given');
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getDownloadURL($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data['serverType']) && !isset($data['serverType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'serverType is a required field');
        }

        if (!is_int($data['serverType'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'serverType should be int, ' .
                gettype($data['serverType']) . ' given');
        }

        return true;
    }
}
