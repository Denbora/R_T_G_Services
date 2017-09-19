<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class AffiliateService extends ServiceBase implements ServiceInterface
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
     * @param string $globalID
     * @param bool $rawResponse
     * @return object
     */
    protected function listGlobalLinked(string $globalID, bool $rawResponse)
    {
        $this->validator->call('listGlobalLinked', $globalID);

        return $this->service('ListGlobalLinked', array('GlobalID' => $globalID), $rawResponse);
    }
}
