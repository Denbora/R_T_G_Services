<?php

namespace denbora\R_T_G_Services\responses;

class SessionResponse extends BaseResponse implements SoapResponseInterface
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
    public function getActiveSessions($response)
    {
        $xml = $response->GetActiveSessionsResult->any;
        $data = simplexml_load_string($xml);
        if (empty($data)) {
            return null;
        } else {
            return $data->NewDataSet->Table;
        }
    }
}
