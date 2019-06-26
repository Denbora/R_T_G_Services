<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class DoughFlowService extends ServiceBase implements ServiceInterface
{
    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     * @throws R_T_G_ServiceException
     */
    protected function updateCustomer($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'updateCustomer', 'UpdateCustomer');
    }
}
