<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DownloadService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @param bool $rawResponse
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data, bool $rawResponse = false)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $serviceResponse = $this->$serviceMethod($data, $rawResponse);

                return $serviceResponse;
            } catch (\SoapFault $e) {
                $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
                throw new R_T_G_ServiceException($errorPrefix . $e->getMessage());
            }
        } else {
            $errorPrefix = 'Error in ' . __FUNCTION__ . ' - ';
            throw new R_T_G_ServiceException($errorPrefix . $serviceMethod .' does not exist');
        }
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function generateDownloadID($data, bool $rawResponse)
    {
        $this->validator->call('generateDownloadID', $data);

        return $this->service('GenerateDownloadID', $data, $rawResponse);
    }

    /**
     * @param $PID
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByPID($PID, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByPID', $PID);

        return $this->service('GetDownloadInformationByPID', $PID, $rawResponse);
    }

    /**
     * @param $DID
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByDID($DID, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByDID', $DID);

        return $this->service('GetDownloadInformationByDID', $DID, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByDates($data, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByDates', $data);

        return $this->service('GetDownloadInformationByDates', $data, $rawResponse);
    }

    /**
     * @param $AffiliatedID
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByAffId($AffiliatedID, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByAffId', $AffiliatedID);

        return $this->service('GetDownloadInformationByAffId', $AffiliatedID, $rawResponse);
    }

    /**
     * @param $TrackingID
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByTracking($TrackingID, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByTracking', $TrackingID);

        return $this->service('GetDownloadInformationByTracking', $TrackingID, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadInformationByAIDPeriod($data, bool $rawResponse)
    {
        $this->validator->call('getDownloadInformationByAIDPeriod', $data);

        return $this->service('GetDownloadInformationByAIDPeriod', $data, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getDownloadURL($data, bool $rawResponse)
    {
        $this->validator->call('getDownloadURL', $data);

        return $this->service('GetDownloadURL', $data, $rawResponse);
    }
}
