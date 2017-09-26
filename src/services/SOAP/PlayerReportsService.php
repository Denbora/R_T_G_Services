<?php

namespace denbora\R_T_G_Services\services\SOAP;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerReportsService extends ServiceBase implements ServiceInterface
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
     * @param $daysAgoLastBet
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerDepositors($daysAgoLastBet, bool $rawResponse)
    {
        return $this->run(
            array('DaysAgoLastBet' => $daysAgoLastBet),
            $rawResponse,
            'getPlayerDepositors',
            'GetPlayerDepositors'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerDepositorsByDepositCount($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getPlayerDepositorsByDepositCount',
            'GetPlayerDepositorsByDepositCount'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerFullGameStatsDetail($data, bool $rawResponse)
    {
        return $this->run(
            $data,
            $rawResponse,
            'getPlayerFullGameStatsDetail',
            'GetPlayerFullGameStatsDetail'
        );
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerGameStats($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerGameStats', 'GetPlayerGameStats');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerLastGamesPlayed($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerLastGamesPlayed', 'GetPlayerLastGamesPlayed');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerNonDepositors($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerNonDepositors', 'GetPlayerNonDepositors');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersByDepositDate($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersByDepositDate', 'GetPlayersByDepositDate');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayersTransactions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayersTransactions', 'GetPlayersTransactions');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerTransactions($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerTransactions', 'GetPlayerTransactions');
    }

    /**
     * @param $data
     * @param bool $rawResponse
     * @return object
     */
    protected function getPlayerBalanceSummary($data, bool $rawResponse)
    {
        return $this->run($data, $rawResponse, 'getPlayerBalanceSummary', 'GetPlayerBalanceSummary');
    }
}
