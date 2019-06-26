<?php

namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;
use denbora\R_T_G_Services\R_T_G_ValidationException;

class DoughFlowValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * @param $data
     * @return bool
     * @throws R_T_G_ValidationException
     */
    protected function updateCustomer($data)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        $this->isEntered($data['Login'], 'Login', $errorPrefix);
        $this->isEntered($data['Gender'], 'Gender', $errorPrefix);
        $this->isEntered($data['Email'], 'Email', $errorPrefix);
        $this->isEntered($data['smsMessages'], 'smsMessages', $errorPrefix);
        $this->isEntered($data['Country'], 'Country', $errorPrefix);
        $this->isEntered($data['birthdate'], 'birthdate', $errorPrefix);
        $this->isEntered($data['Caller'], 'Caller', $errorPrefix);

        $this->stringOrError($data['Login'], 'Login', $errorPrefix);
        $this->stringOrError($data['Gender'], 'Gender', $errorPrefix);
        $this->stringOrError($data['Email'], 'Email', $errorPrefix);
        $this->stringOrError($data['smsMessages'], 'smsMessages', $errorPrefix);
        $this->stringOrError($data['Country'], 'Country', $errorPrefix);
        $this->stringOrError($data['birthdate'], 'birthdate', $errorPrefix);
        $this->stringOrError($data['Caller'], 'Caller', $errorPrefix);

        return true;
    }
}
