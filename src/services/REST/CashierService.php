<?php

namespace denbora\R_T_G_Services\services\REST;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashierService extends RestService
{
    /**
     * First part in url after /api/
     */
    const API_URL = 'cashier';

    /**
     * @param string $query
     * @return array|bool|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function postCommonWalletDeposit($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'common-wallet-deposit'),
                $query
            );
        }
        return false;
    }

    /**
     * @param string $query
     * @return array|bool|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function postCommonWalletWithdrawal($query = '')
    {
        if ($query != '' || $this->validator->call('validate', $query)) {
            return $this->post(
                $this->createFullUrl($query, self::API_URL, '', 'common-wallet-withdrawal'),
                $query
            );
        }
        return false;
    }
}
