<?php

namespace abillits\StringCalc\Container\ServiceProviders;

use abillits\StringCalc\Container\AbstractSingletonServiceProvider;
use abillits\StringCalc\Symbols\SymbolContainer;

/**
 * This is a service provider class for the symbol container class.
 *
 * @package abillits\StringCalc\Container\ServiceProviders
 */
class SymbolContainerServiceProvider extends AbstractSingletonServiceProvider
{
    
    /**
     * @inheritdoc
     */
    protected function createService()
    {
        $stringHelper = $this->getService('stringcalc_stringhelper');

        return new SymbolContainer($stringHelper);
    }

}
