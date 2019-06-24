<?php

namespace denbora\R_T_G_Services\responses;

class DoughFlowResponse extends BaseResponse implements SoapResponseInterface
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
    public function updateCustomer($response)
    {
        return $response;
    }
}
