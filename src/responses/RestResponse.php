<?php

namespace denbora\R_T_G_Services\responses;

class RestResponse implements ResponseInterface
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
     */
    public function onlyContent($response)
    {
        return $response->body;
    }
}
