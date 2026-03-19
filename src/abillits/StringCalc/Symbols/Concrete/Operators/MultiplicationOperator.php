<?php

namespace abillits\StringCalc\Symbols\Concrete\Operators;

use abillits\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical multiplication.
 * Example: "2*3" => 6
 * @see https://en.wikipedia.org/wiki/Multiplication
 *
 * @package abillits\StringCalc\Symbols\Concrete\Operators
 */
class MultiplicationOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['*'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 200;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        return $leftNumber * $rightNumber;
    }

}