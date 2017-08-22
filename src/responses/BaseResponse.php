<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class BaseResponse
{
    protected function baseTrim($response)
    {
        if (is_object($response)) {
            $key = key($response);
            if ($response->$key->HasErrors) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix .
                    'RTG ErrorCode - ' . $response->$key->ErrorCode . '; ' .
                    'Message - ' . $response->$key->Message);
            } else {
                return $response->$key->Data;
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'response has wrong type - ' . gettype($response));
        }
    }

    protected function hasErrors($response)
    {
        $key = key($response);
        if ($response->$key->HasErrors) {
            return true;
        } else {
            return false;
        }
    }

    protected function getMessage($response)
    {
        $key = key($response);
        if ($response->$key->Message) {
            return $response->$key->Message;
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . 'message not found in response');
        }
    }
}
