<?php

namespace denbora\R_T_G_Services\examples\RESTv2\Affiliate;

use denbora\R_T_G_Services\casino\CasinoRestV2;
use denbora\R_T_G_Services\examples\RESTv2\RestExample;
use denbora\R_T_G_Services\R_T_G_ServiceException;

class CreateAffiliatePOST extends RestExample
{
    /**
     * CreateTokenPOST constructor.
     * @param CasinoRestV2 $casino
     */
    public function __construct(CasinoRestV2 $casino)
    {
        try {
            $query = [
                "first_name" => "string",
                "last_name" => "string",
                "password" => "string",
                "email" => "string",
                "phone" => "string",
                "fax" => "string",
                "company_name" => "string",
                "description" => "string",
                "url" => "string",
                "addnlURL" => "string",
                "addr1" => "string",
                "addr2" => "string",
                "city" => "string",
                "state" => "string",
                "zip_code" => "string",
                "country" => "string",
                "program_id" => 0,
                "no_spam" => true,
                "parent_aid" => 0
            ];

            $query = [];

            $result = $casino->AffiliateService->createAffiliatePOST(json_encode($query));
            dd($result);
        } catch (R_T_G_ServiceException $exception) {
            dd($exception->getMessage());
        }
    }
}
