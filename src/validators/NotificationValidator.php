<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class NotificationValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function sendNotification($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        if (!isset($data['MailItemList']) && empty($data['MailItemList'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MailItemList is a required field');
        }

        if (!is_array($data['MailItemList'])) {
            throw new R_T_G_ValidationException($errorPrefix . 'MailItemList should be array, ' .
                gettype($data['MailItemList']) . ' given');
        }

        return true;
    }
}
