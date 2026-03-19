<?php

namespace abillits\StringCalc\Container\ServiceProviders;

use abillits\StringCalc\Container\AbstractSingletonServiceProvider;
use abillits\StringCalc\Support\StringHelper;

/**
 * This is a service provider class for the string helper class.
 *
 * @package abillits\StringCalc\Container\ServiceProviders
 */
class StringHelperServiceProvider extends AbstractSingletonServiceProvider
{
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        return new StringHelper();
    }

}