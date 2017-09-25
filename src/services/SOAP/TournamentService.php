<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class TournamentService extends ServiceBase implements ServiceInterface
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
    protected function getTournamentList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTournamentList', 'GetTournamentList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getTournamentDetails($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getTournamentDetails', 'GetTournamentDetails');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getCasinoList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getCasinoList', 'GetCasinoList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerClassList($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerClassList', 'GetPlayerClassList');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getUnRestrictedTournaments($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getUnRestrictedTournaments', 'GetUnRestrictedTournaments');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRestrictedTournaments($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRestrictedTournaments', 'GetRestrictedTournaments');
    }
}
