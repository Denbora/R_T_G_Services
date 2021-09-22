<?php

namespace denbora\R_T_G_Services\examples\RESTv3;

abstract class RestExample
{
    protected function dumpCLI(...$data)
    {
        echo "\n";
        foreach ($data as $datum) {
            var_export($datum);
            echo "\n";
        }
        echo "\n";
    }
}
