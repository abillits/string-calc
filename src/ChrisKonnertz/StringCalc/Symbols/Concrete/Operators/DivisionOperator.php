<?php

namespace abillits\StringCalc\Symbols\Concrete\Operators;

use abillits\StringCalc\Symbols\AbstractOperator;

/**
 * Operator for mathematical division.
 * Example: "6/2" => 3, "6/0" => InvalidArgumentException
 * @see https://en.wikipedia.org/wiki/Division_(mathematics)
 *
 * @package abillits\StringCalc\Symbols\Concrete\Operators
 */
class DivisionOperator extends AbstractOperator
{

    /**
     * @inheritdoc
     */
    protected $identifiers = ['/'];

    /**
     * @inheritdoc
     */
    const PRECEDENCE = 200;

    /**
     * @inheritdoc
     */
    public function operate($leftNumber, $rightNumber)
    {
        return ($leftNumber && $rightNumber) ? $leftNumber / $rightNumber : 0;
    }

}