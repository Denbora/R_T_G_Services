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
    protected $classMethods;

    /**
     * CasinoValidator constructor.
     */
    public function __construct()
    {
        $this->classMethods = get_class_methods($this);
    }

    /**
     * Entry point for CasinoValidator, which call`s transferred method name
     *
     * @param string $validatorName
     * @param mixed $data
     * @return bool
     * @throws R_T_G_ServiceException
     */
    public function call(string $validatorName, $data)
    {
        if (in_array($validatorName, $this->classMethods)) {
            if ($this->$validatorName($data)) {
                return true;
            } else {
                return false;
            }
        } else {
            throw new R_T_G_ServiceException($validatorName .' does not exist');
        }
    }

    /**
     * validator for baseUrl
     *
     * @param string $webServiceUrl
     * @return bool
     * @throws R_T_G_ServiceException
     */
    private function baseWebServiceUrl(string $webServiceUrl) : bool
    {
        if (empty($webServiceUrl) && filter_var($webServiceUrl, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
    }

    /**
     * cert file validation
     *
     * @param string $fileCertificate
     * @return bool
     */
    private function certFile(string $fileCertificate) : bool
    {
        if (empty($fileCertificate)) {
            return false;
        }
        return true;
    }

    /**
     * Password checking
     *
     * @param string $password
     * @return bool
     */
    private function password(string $password) : bool
    {
        if (empty($password)) {
            return false;
        }
        return true;
    }
}
