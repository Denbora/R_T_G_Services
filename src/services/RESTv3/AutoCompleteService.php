<?php

namespace denbora\R_T_G_Services\services\RESTv3;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AutoCompleteService extends RestV3Service
{
    const SERVICE_NAME = 'AutoComplete';

    /**
     * @param string $queryJSON
     * @return array|mixed|object|string
     * @throws R_T_G_ServiceException
     */
    public function completePendingGamesPOST($queryJSON = '{}')
    {
        return $this->callMethod(self::SERVICE_NAME, 'CompletePendingGames', $queryJSON);
    }
}
