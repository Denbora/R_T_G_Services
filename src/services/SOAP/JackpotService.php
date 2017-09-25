<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class JackpotService extends ServiceBase implements ServiceInterface
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
     * @param $validatorName
     * @param $service
     * @return object
     */
    private function run($data, bool $rawResponse, $validatorName, $service)
    {
        $this->validator->call($validatorName, $data);

        return $this->service($service, $data, $rawResponse);
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getProgressiveJackpot($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getProgressiveJackpot', 'GetProgressiveJackpot');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getProgressiveJackpots($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getProgressiveJackpots', 'GetProgressiveJackpots');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getLastJackpotWinners($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastJackpotWinners', 'GetLastJackpotWinners');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getLastJackpotWinnersBySkin($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getLastJackpotWinnersBySkin', 'GetLastJackpotWinnersBySkin');
    }
}
