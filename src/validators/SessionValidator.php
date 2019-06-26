<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class SessionValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function getActiveSessions($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if ($data != '') {
            throw new R_T_G_ValidationException($errorPrefix . 'data should be empty');
        }

        return true;
    }
}
