<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class GameHistoryService extends ServiceBase implements ServiceInterface
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
    protected function getBaccaratHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBaccaratHistory', 'GetBaccaratHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getGameDetailXML($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getGameDetailXML', 'GetGameDetailXML');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getBlackjackHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getBlackjackHistory', 'GetBlackjackHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerGamingActivity($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGamingActivity', 'GetPlayerGamingActivity');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRouletteHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRouletteHistory', 'GetRouletteHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRSVSSummaryHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSSummaryHistory', 'GetRSVSSummaryHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRSVSGameDetailsHistory($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getRSVSGameDetailsHistory', 'GetRSVSGameDetailsHistory');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getRSVSGameDetailsHistoryWithIcons($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getRSVSGameDetailsHistoryWithIcons',
            'GetRSVSGameDetailsHistoryWithIcons'
        );
    }
}
