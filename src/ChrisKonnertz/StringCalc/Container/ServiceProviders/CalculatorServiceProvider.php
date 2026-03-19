<?php

namespace abillits\StringCalc\Container\ServiceProviders;

use abillits\StringCalc\Calculator\Calculator;
use abillits\StringCalc\Container\AbstractSingletonServiceProvider;

/**
 * This is a service provider class for the calculator class.
 *
 * @package abillits\StringCalc\Container\ServiceProviders
 */
class CalculatorServiceProvider extends AbstractSingletonServiceProvider
{
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        return new Calculator();
    }

}