<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashierService extends RestV3Service
{
    const SERVICE_NAME = 'Cashier';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAllBankingMethodsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAllBankingMethods', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function cashbackGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Cashback', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCashierSettingsPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCashierSettings', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function chargebackPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Chargeback', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function depositCommonWalletPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DepositCommonWallet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function withdrawalCommonWalletPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'WithdrawalCommonWallet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function depositPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Deposit', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function withdrawalPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'Withdrawal', $queryJSON);
    }
}
