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
            throw new R_T_G_ServiceException($errorPrefix . $validatorName .' does not exist');
        }
    }

    protected function createPlayer($data)
    {
        if (!is_array($data)) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ValidationException($errorPrefix . 'Entered data != array');
        }

        $fields = array('Player', 'ThirdPartyDataSync', 'UserID', 'MapToAffID', 'CalledFromCasino');
        if (!$this->allInArray($fields, $data)) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ValidationException($errorPrefix . 'missed fields -' . $this->getError());
        }
        return true;
    }
}
