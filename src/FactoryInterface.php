<?php

namespace denbora\R_T_G_Services;

/**
 * Interface FactoryInterface
 * @package denbora\R_T_G_Services
 */
interface FactoryInterface
{
    /**
     * @param string $type
     * @return object
     */
    public static function build(string $type);
}
