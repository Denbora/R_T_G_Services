<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class MessageCenterResponse extends BaseResponse implements SoapResponseInterface
{
    /**
     * @param $response
     * @return mixed
     */
    public function rawResponse($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getMessagesList($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getUnreadMessagesCount($response)
    {
        return $this->baseTrim($response);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function generateMessageForPlayer($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function deleteMessage($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getForceOnEntrance($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getForceOnExit($response)
    {
        return $this->baseTrim($response);
    }
}
