<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AccountService extends RestV2Service implements RestServiceInterface
{
    const SERVICE_NAME = 'Account';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayerIdGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayerId', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAccountBalanceGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAccountBalance', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getIncompleteSignupsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetIncompleteSignups', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createIncompleteSignupPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateIncompleteSignup', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function changePlayerPasswordPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ChangePlayerPassword', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function forgotPasswordPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ForgotPassword', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function forgotUsernamePUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ForgotUsername', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function changePlayerPasswordWithTokenPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ChangePlayerPasswordWithToken', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function loginPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'LoginPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function logoutPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'LogoutPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function activatePlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ActivatePlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function deactivateAndLogoutPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DeactivateAndLogoutPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function setPlayerPasswordPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SetPlayerPassword', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function resetPlayerPasswordPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'ResetPlayerPassword', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createTokenPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateToken', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function banPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'BanPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function unBanPlayerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UnBanPlayer', $queryJSON);
    }
}
