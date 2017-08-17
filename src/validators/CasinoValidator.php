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
     * Validate $webServiceUrl as a real url
     *
     * @param string $webServiceUrl
     * @return bool
     * @throws R_T_G_ServiceException
     */
    protected function baseWebServiceUrl(string $webServiceUrl) : bool
    {
        if (empty($webServiceUrl) && filter_var($webServiceUrl, FILTER_VALIDATE_URL) === false) {
            return false;
        }

        return true;
    }

    /**
     * Cert file validation
     *
     * @param string $fileCertificate
     * @return bool
     */
    protected function certFile(string $fileCertificate) : bool
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
    protected function password(string $password) : bool
    {
        if (empty($password)) {
            return false;
        }
        return true;
    }

    /**
     * Validate existence of such service
     *
     * @param string $name
     * @return bool
     */
    protected function service(string $name) : bool
    {
        if (empty($name)) {
            return false;
        }
        return true;
    }
}
