<?php

namespace denbora\R_T_G_Services\services\RESTv2;

use denbora\R_T_G_Services\entity\RestEntity;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class HelperService extends RestV2Service implements RestServiceInterface
{

    /**
     * @param string $httpMethod
     * @param string $urlRequest
     * @param string $bodyJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function manualSendRequest(string $httpMethod, string $urlRequest, string $bodyJSON = '{}')
    {
        $restEntity = RestEntity::getInstance()
            ->setUrl($urlRequest)
            ->setHttpMethod(strtoupper($httpMethod))
            ->setQuery(json_decode($bodyJSON, true));

        return $this->sendRequest($restEntity);
    }
}
