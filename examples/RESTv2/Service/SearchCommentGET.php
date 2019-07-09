<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class SearchCommentGET extends RestExample
{
    /**
     * SearchCommentGET constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                'login' => 'tony_0003',
//                'userId' => '',
//                'statusId' => '',
//                'categoryId' => '',
//                'typeId' => '',
//                'from' => '',
//                'to' => '',
//                'currentUserId' => '',
//                'followUpDateFrom' => '',
//                'followUpDateTo' => '',
//                'externalUserNames' => '',
//                'keyWord' => '',
            ];

            $result = $casino->ServiceService->searchCommentGET(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
