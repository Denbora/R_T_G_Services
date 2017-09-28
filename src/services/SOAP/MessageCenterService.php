<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class MessageCenterService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @param $validatorName
     * @param $service
     * @return object
     */
    private function run($data, bool $rawResponse, $validatorName, $service)
    {
        $this->validator->call($validatorName, $data);

        return $this->service($service, $data, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     */
    protected function getMessagesList($data, bool $rawResponse)
    {
        $normal = array(
            'PID' => (string) $data['PID'],
            'MoneyType' => (string) $data['MoneyType'],
            'SkinID' => (int) $data['SkinID'],
            'ClientType' => (string) $data['ClientType']
        );
        return $this->run($normal, $rawResponse, 'getMessagesList', 'GetMessagesList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getUnreadMessagesCount($data, bool $rawResponse)
    {
        $normal = array(
            'PID' => (string) $data['PID'],
            'MoneyType' => (string) $data['MoneyType'],
            'SkinID' => (int) $data['SkinID'],
            'ClientType' => (string) $data['ClientType']
        );
        return $this->run($normal, $rawResponse, 'getUnreadMessagesCount', 'GetUnreadMessagesCount');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function generateMessageForPlayer($data, bool $rawResponse)
    {
        $normal = array(
            'MessageID' => (int) $data['MessageID'],
            'PID' => (int) $data['PID'],
            'CasinoID' => (int) $data['CasinoID'],
            'Scheme' => (string) $data['Scheme'],
            'CashierURL' => (string) $data['CashierURL'],
            'TournamentURL' => (string) $data['TournamentURL'],
            'MpRouletteURL' => (string) $data['MpRouletteURL'],
            'PlayMode' => (string) $data['PlayMode'],
            'ClientType' => (string) $data['ClientType']
        );
        return $this->run($normal, $rawResponse, 'generateMessageForPlayer', 'GenerateMessageForPlayer');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function deleteMessage($data, bool $rawResponse)
    {
        $normal = array(
            'MessageID' => (int) $data['MessageID'],
            'PID' => (string) $data['PID']
        );
        return $this->run($normal, $rawResponse, 'deleteMessage', 'DeleteMessage');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getForceOnEntrance($data, bool $rawResponse)
    {
        $normal = array(
            'MoneyType' => (int) $data['MoneyType'],
            'PID' => (string) $data['PID'],
            'SkinID' => (int) $data['SkinID']
        );
        return $this->run($normal, $rawResponse, 'getForceOnEntrance', 'GetForceOnEntrance');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getForceOnExit($data, bool $rawResponse)
    {
        $normal = array(
            'moneyType' => (bool) $data['moneyType'],
            'PID' => (string) $data['moneyType'],
            'skinID' => (int) $data['moneyType'],
            'clientType' => (bool) $data['clientType']
        );
        return $this->run($normal, $rawResponse, 'getForceOnExit', 'GetForceOnExit');
    }
}
