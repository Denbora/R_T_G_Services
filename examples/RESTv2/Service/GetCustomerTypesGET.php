<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetCustomerTypesGET extends RestExample
{
    /**
     * GetCustomerTypesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'isActive' => true
            ];

            $result = $casino->ServiceService->getCustomerTypesGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
