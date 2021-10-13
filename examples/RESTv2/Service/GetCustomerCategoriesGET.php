<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetCustomerCategoriesGET extends RestExample
{
    /**
     * GetCustomerCategoriesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'typeId' => 'b524a32e-b2bb-4a18-896e-c3a08ef0022e', // "description": "Comment",
            ];

            $result = $casino->ServiceService->getCustomerCategoriesGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
