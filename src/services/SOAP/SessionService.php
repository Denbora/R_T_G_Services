<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class SessionService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function getActiveSessions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getActiveSessions', 'GetActiveSessions');
    }
}
