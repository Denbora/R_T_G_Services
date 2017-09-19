<?php

namespace denbora\R_T_G_Services\responses;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DownloadResponse extends BaseResponse implements SoapResponseInterface
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
    public function generateDownloadID($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'int', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByPID($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'Download', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByDID($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByDates($response)
    {
        $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';

        return $this->getDataFields($response, 'Download', $errorPrefix);
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByAffId($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByTracking($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadInformationByAIDPeriod($response)
    {
        return $response;
    }

    /**
     * @param $response
     * @return mixed
     */
    public function getDownloadURL($response)
    {
        return $response;
    }
}
