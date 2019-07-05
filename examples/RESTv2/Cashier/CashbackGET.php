<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Cashier;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CashbackGET extends RestExample
{
    /**
     * GetPlayerClassesGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'login' => 'tony_0001',
                'startDate' => '2019-05-05',
                'endDate' => '2019-05-06',
                'couponCode' => 'MARS',
                'isLastDeposit' => 'true'
            ];

            $result = $casino->CashierService->cashbackGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
