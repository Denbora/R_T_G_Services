<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Player;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerClassesGET extends RestExample
{
    /**
     * GetPlayerClassesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [];
            $result = $casino->PlayerService->getPlayerClassesGET(json_encode($query));
            $this->dumpCLI($result);
        } catch (R_T_G_ServiceException $exception) {
            $this->dumpCLI($exception->getMessage());
        }
    }
}
