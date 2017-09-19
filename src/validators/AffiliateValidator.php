<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class AffiliateValidator extends BaseValidator implements ValidatorInterface
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
     * @param $globalID
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function listGlobalLinked($globalID)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($globalID) && empty($globalID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID is a required field');
        }

        if (!is_string($globalID) && !is_numeric($globalID)) {
            throw new R_T_G_ValidationException($errorPrefix . 'GlobalID should be string, ' .
                gettype($globalID) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createAffiliate($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'all data is a required field');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Data should be array, ' .
                gettype($data) . ' given');
        }

        return true;
    }

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function createProgram($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (empty($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'all data is a required field');
        }

        if (!is_array($data)) {
            throw new R_T_G_ValidationException($errorPrefix . 'Data should be array, ' .
                gettype($data) . ' given');
        }

        return true;
    }
}
