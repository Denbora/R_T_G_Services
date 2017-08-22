<?php

namespace denbora\R_T_G_Services\validators;

/**
 * Interface ValidatorInterface
 * @package denbora\R_T_G_Services\validators
 */
interface ValidatorInterface
{
    /**
     * @param string $validatorName
     * @param mixed $data
     * @return bool
     */
    public function call(string $validatorName, $data);
}
