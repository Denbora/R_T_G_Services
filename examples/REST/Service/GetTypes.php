<?php

namespace denbora\R_T_G_Services\examples\REST\Service;

use denbora\R_T_G_Services\casino\CasinoRest;

class GetTypes
{
    /**
     * GetTypes constructor.
     * @param CasinoRest $casino
     */
    public function __construct($casino)
    {
        try {
            $query = '{
                "isActive": "true"
            }';
            $result = $casino->service->getTypes($query);

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
