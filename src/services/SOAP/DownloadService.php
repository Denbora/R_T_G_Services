<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DownloadService extends ServiceBase implements ServiceInterface
{
    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function generateDownloadID($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'generateDownloadID', 'GenerateDownloadID');
    }

    /**
     * @param $PID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByPID($PID, bool $rawResponse)
    {
        return $this->run($PID, $rawResponse, 'getDownloadInformationByPID', 'GetDownloadInformationByPID');
    }

    /**
     * @param $DID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByDID($DID, bool $rawResponse)
    {
        return $this->run($DID, $rawResponse, 'getDownloadInformationByDID', 'GetDownloadInformationByDID');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByDates($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformationByDates', 'GetDownloadInformationByDates');
    }

    /**
     * @param $AffiliatedID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByAffId($AffiliatedID, bool $rawResponse)
    {
        return $this->run($AffiliatedID, $rawResponse, 'getDownloadInformationByAffId', 'GetDownloadInformationByAffId');
    }

    /**
     * @param $TrackingID
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByTracking($TrackingID, bool $rawResponse)
    {
        return $this->run($TrackingID, $rawResponse, 'getDownloadInformationByTracking', 'GetDownloadInformationByTracking');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadInformationByAIDPeriod($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadInformationByAIDPeriod', 'GetDownloadInformationByAIDPeriod');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getDownloadURL($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getDownloadURL', 'GetDownloadURL');
    }
}
