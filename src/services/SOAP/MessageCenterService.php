<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class MessageCenterService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getMessagesList($data, bool $rawResponse)
    {
        $normal = [
            'PID' => (string)$data['PID'],
            'MoneyType' => (string)$data['MoneyType'],
            'SkinID' => (int)$data['SkinID'],
            'ClientType' => (string)$data['ClientType']
        ];
        return $this->run($normal, $rawResponse, 'getMessagesList', 'GetMessagesList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getUnreadMessagesCount($data, bool $rawResponse)
    {
        $normal = [
            'PID' => (string)$data['PID'],
            'MoneyType' => (string)$data['MoneyType'],
            'SkinID' => (int)$data['SkinID'],
            'ClientType' => (string)$data['ClientType']
        ];
        return $this->run($normal, $rawResponse, 'getUnreadMessagesCount', 'GetUnreadMessagesCount');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function generateMessageForPlayer($data, bool $rawResponse)
    {
        $normal = [
            'MessageID' => (int)$data['MessageID'],
            'PID' => (int)$data['PID'],
            'CasinoID' => (int)$data['CasinoID'],
            'Scheme' => (string)$data['Scheme'],
            'CashierURL' => (string)$data['CashierURL'],
            'TournamentURL' => (string)$data['TournamentURL'],
            'MpRouletteURL' => (string)$data['MpRouletteURL'],
            'PlayMode' => (string)$data['PlayMode'],
            'ClientType' => (string)$data['ClientType']
        ];
        return $this->run($normal, $rawResponse, 'generateMessageForPlayer', 'GenerateMessageForPlayer');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function deleteMessage($data, bool $rawResponse)
    {
        $normal = [
            'MessageID' => (int)$data['MessageID'],
            'PID' => (string)$data['PID']
        ];
        return $this->run($normal, $rawResponse, 'deleteMessage', 'DeleteMessage');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getForceOnEntrance($data, bool $rawResponse)
    {
        $normal = [
            'MoneyType' => (int)$data['MoneyType'],
            'PID' => (string)$data['PID'],
            'SkinID' => (int)$data['SkinID']
        ];
        return $this->run($normal, $rawResponse, 'getForceOnEntrance', 'GetForceOnEntrance');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getForceOnExit($data, bool $rawResponse)
    {
        $normal = [
            'moneyType' => (bool)$data['moneyType'],
            'PID' => (string)$data['moneyType'],
            'skinID' => (int)$data['moneyType'],
            'clientType' => (bool)$data['clientType']
        ];
        return $this->run($normal, $rawResponse, 'getForceOnExit', 'GetForceOnExit');
    }
}
