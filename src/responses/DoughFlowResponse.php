<?php

namespace denbora\R_T_G_Services\responses;

class DoughFlowResponse extends BaseResponse implements SoapResponseInterface
{

    public function rawResponse($response)
    {
        return $response;
    }

    public function updateCustomer($response)
    {
        return $response;
    }
}
