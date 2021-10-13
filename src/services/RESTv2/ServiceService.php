<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class ServiceService extends RestV2Service
{
    const SERVICE_NAME = 'Service';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCurrenciesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCurrencies', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function getCommentGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetComment', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function updateCommentPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdateComment', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function deleteCommentDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DeleteComment', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getDownloadUrlGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDownloadUrl', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCustomerTypesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCustomerTypes', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCustomerCategoriesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCustomerCategories', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getCustomerStatusesGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetCustomerStatuses', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated Use {@see \denbora\R_T_G_Services\services\RESTv2\AffiliateService::getDownloadsGET()}
     */
    public function getDownloadsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDownloads', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function searchCommentGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'SearchComment', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     * @deprecated this method not tested
     */
    public function createCommentPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreateComment', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getDownloadIdPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetDownloadId', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function pinCommentPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'PinComment', $queryJSON);
    }
}
