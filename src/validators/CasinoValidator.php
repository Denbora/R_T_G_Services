<?php


namespace denbora\R_T_G_Services\validators;

use denbora\R_T_G_Services\R_T_G_ServiceException;

/**
 * Class CasinoValidator
 * @package denbora\R_T_G_Services\validators
 */
class CasinoValidator extends BaseValidator implements ValidatorInterface
{
    /**
     * @var array
     */
    private $classMethods;

    /**
     * CasinoValidator constructor.
     */
    public function __construct()
    {
        $this->classMethods = get_class_methods($this);
    }

    /**
     * @param string $validatorName
     * @param mixed $data
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function validate(string $validatorName, $data)
    {
        $methodName = 'validate'.$validatorName;

        if (in_array($methodName, $this->classMethods)) {
            if ($this->$methodName($data)) {
                return true;
            } else {
                return false;
            }
        } else {
            throw new R_T_G_ServiceException($validatorName .' does not exist');
        }
    }

    /**
     * @param String $webServiceUrl
     * @return bool
     * @throws R_T_G_ServiceException
     */
    private function validateBaseWebServiceUrl(String $webServiceUrl) : bool
    {

        if (empty($webServiceUrl) && filter_var($webServiceUrl, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
    }
}
