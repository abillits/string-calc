<?php

namespace abillits\StringCalc\Container;

use abillits\StringCalc\Container\ServiceProviders\CalculatorServiceProvider;
use abillits\StringCalc\Container\ServiceProviders\InputStreamServiceProvider;
use abillits\StringCalc\Container\ServiceProviders\StringHelperServiceProvider;
use abillits\StringCalc\Container\ServiceProviders\SymbolContainerServiceProvider;

/**
 * This class is where all service providers are registered
 * (except of those that are registered at runtime).
 *
 * @package abillits\StringCalc\Container
 */
class ServiceProviderRegistry implements ServiceProviderRegistryInterface
{

    /**
     * @inheritdoc
     */
    public function getServiceProviders()
    {
        $serviceProviders = [
            'stringcalc_stringhelper'       => StringHelperServiceProvider::class,
            'stringcalc_inputstream'        => InputStreamServiceProvider::class,
            'stringcalc_symbolcontainer'    => SymbolContainerServiceProvider::class,
            'stringcalc_calculator'         => CalculatorServiceProvider::class,
        ];

        return $serviceProviders;
    }

}