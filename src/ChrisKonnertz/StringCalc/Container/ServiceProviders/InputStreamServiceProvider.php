<?php

namespace abillits\StringCalc\Container\ServiceProviders;

use abillits\StringCalc\Container\AbstractSingletonServiceProvider;
use abillits\StringCalc\Tokenizer\InputStream;

/**
 * This is a service provider class for the input stream class.
 *
 * @package abillits\StringCalc\Container\ServiceProviders
 */
class InputStreamServiceProvider extends AbstractSingletonServiceProvider
{

    /**
     * @inheritdoc
     */
    protected function createService()
    {
        $stringHelper = $this->getService('stringcalc_stringhelper');

        return new InputStream($stringHelper);
    }

}