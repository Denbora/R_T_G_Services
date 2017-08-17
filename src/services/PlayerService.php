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
            $test = $this->$serviceMethod($data);
            return $test;
        } else {
            throw new R_T_G_ServiceException($serviceMethod .' does not exist');
        }
    }

    /**
     * @param string $PID
     * @return mixed
     */
    protected function getPlayer(string $PID)
    {
        try {
            $playerResult = $this->soapClient->__soapCall("GetPlayer", array(array('PID' => $PID)));

            $result = $this->trimResponse($playerResult);

            return $result;
        } catch (\SoapFault $e) {
            echo "<h2>Soap Error</h2>";
            echo $e->getMessage();
        }
    }


    /**
     * @param $args
     * @return object
     */
    protected function getPlayers($args)
    {
        try {
            $playersResult = $this->soapClient->__soapCall("getPlayers", array($args));

            $result = $this->trimResponse($playersResult);

            return $result;
        } catch (\SoapFault $e) {
            echo "<h2>Soap Error</h2>";
            echo $e->getMessage();
        }
    }
}
