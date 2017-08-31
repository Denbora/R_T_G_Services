<?php

namespace denbora\R_T_G_Services\examples\REST\Service;

use denbora\R_T_G_Services\casino\CasinoRest;

class PostComments
{
    /**
     * PostComments constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "login": "porter-698",
                "user_id": 0,
                "type_id": "436d85a5-4909-4157-9c8d-be1243dd2e67",
                "category_id": "7acc45f8-ec52-48a6-aa59-cd4ace0013c6",
                "status_id": "d696da09-2a60-4a80-8d93-06563ff7505b",
                "comment_text": "teset",
                "external_user_name": "test",
                "follow_up_date": "2017-08-31"
            }';
            $result = $casino->service->postComments($query);

            echo "<pre>";
            var_dump($result);
            echo "</pre>";
        } catch (\Exception $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
        }
    }
}
