<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Report;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetPlayerDepositWithdrawalHistoryGET extends RestExample
{
    /**
     * GetPlayerDepositWithdrawalHistoryGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'startDate' => '2019-06-06',
                'endDate' => '2019-07-09',
                'playerId' => '10307426',
            ];

            $result = $casino->ReportService->getPlayerDepositWithdrawalHistoryGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
