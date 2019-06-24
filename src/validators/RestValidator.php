<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class RestValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $query
     * @return bool
     * @throws R_T_G_ServiceException
     */
    protected function validate($query): bool
    {
        if (is_string($query)) {
            return true;
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . ' transmitted parameter should be string');
        }
    }
}
