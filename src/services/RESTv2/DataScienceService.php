<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DataScienceService extends RestV2Service
{
    const SERVICE_NAME = 'DataScience';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRfmScoreForAllPlayersGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRfmScoreForAllPlayers', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getAllSegmentsGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetAllSegments', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getRfmScoreForSpecificPlayerGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetRfmScoreForSpecificPlayer', $queryJSON);
    }

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function getPlayersOfSegmentGET($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'GetPlayersOfSegment', $queryJSON);
    }
}
