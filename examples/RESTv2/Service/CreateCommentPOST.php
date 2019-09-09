<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Service;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateCommentPOST extends RestExample
{
    /**
     * CreateCommentPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        #IS NOT TESTED#
        try {
            $query = [
                'login' => 'tony_0003',
                'user_id' => 0,
                'type_id' => 'string',
                'category_id' => 'string',
                'status_id' => 'string',
                'comment_text' => 'string',
                'external_user_name' => 'string',
                'follow_up_date' => '2019-07-05',
            ];

            $result = $casino->ServiceService->createCommentPOST(json_encode($query));

            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
