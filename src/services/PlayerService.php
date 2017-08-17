<?php

namespace denbora\R_T_G_Services\services;

use denbora\R_T_G_Services\R_T_G_ServiceException;

class PlayerService extends ServiceBase implements ServiceInterface
{

    /**
     * @param $serviceMethod string
     * @param $data
     * @return mixed
     * @throws R_T_G_ServiceException
     */
    public function call(string $serviceMethod, $data)
    {
        if (in_array($serviceMethod, $this->classMethods)) {
            try {
                $service = $this->$serviceMethod($data);

                return $service;
            } catch (\SoapFault $e) {
                echo "<h2>Soap Error</h2>";
                echo $e->getMessage();
            }
        } else {
            throw new R_T_G_ServiceException($serviceMethod .' does not exist');
        }
    }

    /**
     * Activates a given player in the casino.
     *
     * @param array $args
     * @return object
     */
    protected function activatePlayer($args)
    {
        $this->service('ActivatePlayer', $args);
    }

    /**
     * The getPlayer method retrieves all the information of a specific player based on its Player ID (PID)
     *
     * @param string $PID
     * @return object
     */
    protected function getPlayer(string $PID)
    {
        $this->service('getPlayer', array($PID));
    }


    /**
     * This method retrieves all players in the casino based on their sign up date.
     *
     * @param array $args
     * @return object
     */
    protected function getPlayers($args)
    {
        $this->service('getPlayers', $args);
    }
}
