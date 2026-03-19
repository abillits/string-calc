<?php

namespace abillits\StringCalc\Grammar\Expressions;

/**
 * This is a container expression. The expressions that it contains are
 * linked with an AND. They (as a whole) are optional.
 *
 * @package abillits\StringCalc\Grammar\Expressions
 */
class OptionalAndExpression extends AbstractContainerExpression
{

    public function __toString()
    {
        $parts = [];

        foreach ($this->expressions as $expression) {
            $parts[] = $expression->__toString();
        }

        return '[ '.implode(' ', $parts).' ]';
    }

}