<?php

namespace denbora\R_T_G_Services\validators;

/**
 * Class CasinoValidator
 * @package denbora\R_T_G_Services\validators
 */
class CasinoValidator extends BaseValidator implements ValidatorInterface
{

    /**
     * Validate $webServiceUrl as a real url
     *
     * @param string $webServiceUrl
     * @return bool
     */
    protected function baseWebServiceUrl(string $webServiceUrl): bool
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
    protected function certFile(string $fileCertificate): bool
    {
        if (empty($fileCertificate) && file_exists($fileCertificate)) {
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
    protected function password(string $password): bool
    {
        if (empty($password)) {
            return false;
        }
        return true;
    }
}
