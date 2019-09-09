<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Casino;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class ModifyIdInformationPUT extends RestExample
{
    /**
     * GetCasinoTotalsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'id' => 0,
                'description' => 'bla-bla-bla',
                'enabled' => false
            ];

            $result = $casino->CasinoService->modifyIdInformationPUT(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
