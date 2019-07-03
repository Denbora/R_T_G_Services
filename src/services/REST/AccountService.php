<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AccountService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'accounts';

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postActivate($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'activate'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postDeactivate($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'deactivate'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postLogin($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'login'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putChangePassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, '', 'change-password'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putChangePasswordWithToken($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, '', 'change-password-with-token'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postResetPassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'reset-password'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putForgotPassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, '', 'forgot-password'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function putForgotUsername($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::API_URL, '', 'forgot-username'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getIncompleteSignups($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'incomplete-signups'));
        }
        return false;
    }

    /**
     * @param string $query
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function postIncompleteSignups($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'incomplete-signups'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postLogout($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'logout'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getPlayerid($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'playerid'));
        }
        return false;
    }

    /**
     * Get player balance by login
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function getBalance($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::API_URL, '', 'balance'));
        }
        return false;
    }

    /**
     * Set player password by id
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postSetPassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'set-password'),
                $query
            );
        }
        return false;
    }

    /**
     * Create player token by login and type
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postToken($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            $url = $this->createFullUrl($query, self::API_URL, '', 'token');
            $url = $this->addQueryParametersToUrl($query, ['login'], $url);
            $query = $this->removeParametersFromQuery($query, ['login']);

            return $this->post(
                $url,
                $query
            );
        }
        return false;
    }

    /**
     * Ban player by id. Also with type and comment
     * With deduct affiliate earnings true/false
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postBan($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            $url = $this->createFullUrl($query, self::API_URL, '', 'ban');
            $url = $this->addQueryParametersToUrl($query, ['deductAffiliateEarnings'], $url);
            $query = $this->removeParametersFromQuery($query, ['deductAffiliateEarnings']);

            return $this->post(
                $url,
                $query
            );
        }
        return false;
    }

    /**
     * Unban player by id
     *
     * @param string $query
     * @return bool|mixed
     * @throws R_T_G_ServiceException
     */
    public function postUnban($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            $url = $this->createFullUrl($query, self::API_URL, '', 'unban');
            $url = $this->addQueryParametersToUrl($query, ['includeAffiliateEarnings'], $url);
            $query = $this->removeParametersFromQuery($query, ['includeAffiliateEarnings']);

            return $this->post(
                $url,
                $query
            );
        }
        return false;
    }
}
