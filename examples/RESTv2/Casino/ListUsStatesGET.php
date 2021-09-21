<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Casino;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ListUsStatesGET extends RestExample
{
    /**
     * ListUsStatesGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $result = $casino->CasinoService->listUsStatesGET();
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
