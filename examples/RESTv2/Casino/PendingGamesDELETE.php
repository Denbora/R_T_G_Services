<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Casino;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class PendingGamesDELETE extends RestExample
{
    /**
     * GetCouponsGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2020-08-20',
                'endDate' => '2020-08-20',
            ];

            $result = $casino->CasinoService->pendingGamesDELETE(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
