<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class RestResponse implements ResponseInterface
{
    /**
     * @param $response
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function getContent($response)
    {
        if (is_int($response->code) && $response->code != 200) {
            throw new R_T_G_ServiceException('RTG Code - ' . $response->code);
        } else {
            return $response->body;
        }
    }
}
