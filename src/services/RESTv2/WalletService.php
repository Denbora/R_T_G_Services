<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class WalletService extends RestV2Service
{
    const SERVICE_NAME = 'Wallet';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBalanceGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBalance', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated use {@see WalletService::getWalletEndpointGET()}
     */
    public function getWalletSetupInfoEndpointGET($queryJSON = '{}')
    {
        return $this->getWalletEndpointGET($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getWalletEndpointGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetWalletEndpoint', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated use {@see WalletService::updateWalletEndpointPUT()}
     */
    public function updateEndpointPUT($queryJSON = '{}')
    {
        return $this->updateWalletEndpointPUT($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updateWalletEndpointPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdateWalletEndpoint', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated use {@see WalletService::createWalletEndpointPOST()}
     */
    public function createEndpointPOST($queryJSON = '{}')
    {
        return $this->createWalletEndpointPOST($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createWalletEndpointPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateWalletEndpoint', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getNotificationGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function subscribeNotificationPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SubscribeNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function unsubscribeNotificationDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UnsubscribeNotification', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated use {@see WalletService::placeSeamlessWalletSettlementPOST()}
     */
    public function placeSettlementInSeamlessPOST($queryJSON = '{}')
    {
        return $this->placeSeamlessWalletSettlementPOST($queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function placeSeamlessWalletSettlementPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PlaceSeamlessWalletSettlement', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getBalancesPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetBalances', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function placeBetPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PlaceBet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function cancelBetDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CancelBet', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function placeSettlementPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PlaceSettlement', $queryJSON);
    }
}
