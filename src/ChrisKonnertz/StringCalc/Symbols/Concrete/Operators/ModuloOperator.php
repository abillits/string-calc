<?php

namespace abillits\StringCalc\Symbols\Concrete\Operators;

use abillits\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical modulo operation.
 * Example: "5%3" => 2
 * @see https://en.wikipedia.org/wiki/Modulo_operation
 *
 * @package abillits\StringCalc\Symbols\Concrete\Operators
 */
class ModuloOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['%'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 200;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        return $leftNumber % $rightNumber;
    }

}