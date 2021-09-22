<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PromotionService extends RestV3Service
{
    const SERVICE_NAME = 'Promotion';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPromotionGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPromotion', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updatePromotionPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdatePromotion', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function deletePromotionDELETE($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'DeletePromotion', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getActivePromotionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetActivePromotions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPromotionStatisticsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPromotionStatistics', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPromotionsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPromotions', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function createPromotionPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CreatePromotion', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function updatePromotionStatusPUT($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'UpdatePromotionStatus', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function addBannerPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'AddBanner', $queryJSON);
    }
}
