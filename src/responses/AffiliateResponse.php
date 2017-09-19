<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AffiliateResponse extends BaseResponse implements SoapResponseInterface
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
     * @return object
     * @throws R_T_G_ServiceException
     */
    public function listGlobalLinked($response)
    {
        $xml = $response->ListGlobalLinkedResult->any;
        $data = simplexml_load_string($xml);

        return $data->NewDataSet->Table;
    }

    /**
     * @param $response
     * @return bool
     */
    public function createAffiliate($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function createProgram($response)
    {
        return $response;
    }
}
