<?php

namespace abillits\StringCalc\Symbols\Concrete\Operators;

use abillits\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical exponentiation.
 * Example: "3^2" => 9, "-3^2" => -9, "3^-2" equals "3^(-2)"
 * @see https://en.wikipedia.org/wiki/Exponentiation
 *
 * @package abillits\StringCalc\Symbols\Concrete\Operators
 */
class ExponentiationOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['^'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 300;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        return pow($leftNumber, $rightNumber);
    }

}