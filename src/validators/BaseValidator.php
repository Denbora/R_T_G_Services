<?php


namespace denbora\R_T_G_Services\validators;

/**
 * Class BaseValidator
 * @package denbora\R_T_G_Services\validators
 */
class BaseValidator
{
    /**
     * @var array
     */
    protected $classMethods;

    /**
     * CasinoValidator constructor.
     */
    public function __construct()
    {
        $this->classMethods = get_class_methods($this);
    }
}
