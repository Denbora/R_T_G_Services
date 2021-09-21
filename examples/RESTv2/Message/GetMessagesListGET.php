<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Message;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class GetMessagesListGET extends RestExample
{
    /**
     * GetMessagesListGET constructor.
     * @param CasinoRestV2 $casino
     * @deprecated Need testing
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'pid' => '1', // playerId
                'skinId' => 1,
                'moneyType' => 'fun', // fun/real/funAndReal
                'clientType' => 'download', // download/instantplay/mobile
            ];

            $result = $casino->MessageService->getMessagesListGET(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
