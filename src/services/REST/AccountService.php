<?php

namespace denbora\R_T_G_Services\services\REST;

class AccountService extends RestService
{
    /**
     * First part in url after /api/
     */
    const APIURL = 'accounts';

    /**
     * @param string $query
     * @return mixed
     */
    public function postActivate($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'activate'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postDeactivate($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'deactivate'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postLogin($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'login'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function putChangePassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, '', 'change-password'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function putChangePasswordWithToken($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, '', 'change-password-with-token'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postResetPassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'reset-password'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function putForgotPassword($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, '', 'forgot-password'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function putForgotUsername($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->put(
                $this->createFullUrl($query, self::APIURL, '', 'forgot-username'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getIncompleteSignups($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, '', 'incomplete-signups'));
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postIncompleteSignups($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'incomplete-signups'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function postLogout($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::APIURL, '', 'logout'),
                $query
            );
        }
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function getPlayerid($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->get($this->createGetFullUrl($query, self::APIURL, '', 'playerid'));
        }
    }
}
