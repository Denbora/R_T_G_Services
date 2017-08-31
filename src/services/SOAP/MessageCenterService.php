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
            $test = $this->$serviceMethod($data);
            return $test;
        } else {
            throw new R_T_G_ServiceException($serviceMethod .' does not exist');
        }
    }

    /**
     * @param $args
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    protected function getMessageList($args)
    {
        try {
            $messageList = $this->soapClient->__soapCall("GetMessageList", array($args));

            return $messageList;
        } catch (\SoapFault $e) {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
        }
    }
}