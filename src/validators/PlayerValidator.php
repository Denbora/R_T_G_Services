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
            throw new R_T_G_ServiceException($validatorName .' does not exist');
        }
    }

    protected function createPlayer($data)
    {
        if (!is_array($data)) {
            throw new R_T_G_ValidationException('entered data is not an array');
        }
        $fields = array('Player', 'ThirdPartyDataSync', 'UserID', 'MapToAffID', 'CalledFromCasino');
        if (!in_array($fields, $data, true)) {
            die('5555');
        }
        die('322');
        return true;
    }
}
