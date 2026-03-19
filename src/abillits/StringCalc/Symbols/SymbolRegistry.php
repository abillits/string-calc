<?php

namespace abillits\StringCalc\Symbols;

use abillits\StringCalc\Symbols\Concrete\Brackets\ClosingBracket;
use abillits\StringCalc\Symbols\Concrete\Brackets\OpeningBracket;
use abillits\StringCalc\Symbols\Concrete\Constants\EConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\EulerConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\LnPiConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\LnTenConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\LnTwoConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\LogTenEConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\LogTwoEConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\OnePiConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\PiConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\PiFourConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\PiTwoConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\SqrtOneTwoConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\SqrtPiConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\SqrtThreeConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\SqrtTwoConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\TwoPiConstant;
use abillits\StringCalc\Symbols\Concrete\Constants\TwoSqrtPiConstant;
use abillits\StringCalc\Symbols\Concrete\Functions\AbsFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ACosFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ACosHFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ASinFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ASinHFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ATanFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ATanHFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ATanTwoFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\CeilFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\CosFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\CosHFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\DegToRadFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\EnFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ExpFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\ExpMOneFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\FloorFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\FModFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\GetRandMaxFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\HypotFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\LogFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\LogOnePFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\LogTenFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\MaxFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\MinFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\MTGetRandMaxFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\MTRandFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\PowFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\RadToDegFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\RandFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\RoundFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\SinFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\SinHFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\SqrtFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\TanFunction;
use abillits\StringCalc\Symbols\Concrete\Functions\TanHFunction;
use abillits\StringCalc\Symbols\Concrete\Number;
use abillits\StringCalc\Symbols\Concrete\Operators\AdditionOperator;
use abillits\StringCalc\Symbols\Concrete\Operators\DivisionOperator;
use abillits\StringCalc\Symbols\Concrete\Operators\ExponentiationOperator;
use abillits\StringCalc\Symbols\Concrete\Operators\ModuloOperator;
use abillits\StringCalc\Symbols\Concrete\Operators\MultiplicationOperator;
use abillits\StringCalc\Symbols\Concrete\Operators\SubtractionOperator;
use abillits\StringCalc\Symbols\Concrete\Separator;

/**
 * This class has one simple job: It contains an array with the names
 * of the initially registered symbols. It does not offer an add()
 * method - but you can add new symbols via the addSymbol() method of
 * the StringCalc class.
 *
 * @package abillits\StringCalc\Symbols
 */
class SymbolRegistry
{

    /**
     * This method has to return an array with the class names of all registered
     * symbols. Symbols have to inherit from the AbstractSymbol class.
     *
     * @return string[]
     */
    public function getSymbols()
    {
        $symbols = [
            Number::class,

            Separator::class,

            ClosingBracket::class,
            OpeningBracket::class,

            PiConstant::class,
            EConstant::class,
            LogTwoEConstant::class,
            LogTenEConstant::class,
            LnTwoConstant::class,
            LnTenConstant::class,
            PiTwoConstant::class,
            PiFourConstant::class,
            OnePiConstant::class,
            TwoPiConstant::class,
            SqrtPiConstant::class,
            TwoSqrtPiConstant::class,
            SqrtTwoConstant::class,
            SqrtThreeConstant::class,
            SqrtOneTwoConstant::class,
            LnPiConstant::class,
            EulerConstant::class,

            AdditionOperator::class,
            DivisionOperator::class,
            ExponentiationOperator::class,
            ModuloOperator::class,
            MultiplicationOperator::class,
            SubtractionOperator::class,

            AbsFunction::class,
            ACosFunction::class,
            ACosHFunction::class,
            ASinFunction::class,
            ASinHFunction::class,
            ATanFunction::class,
            ATanHFunction::class,
            ATanTwoFunction::class,
            CeilFunction::class,
            CosFunction::class,
            CosHFunction::class,
            DegToRadFunction::class,
            EnFunction::class,
            ExpFunction::class,
            ExpMOneFunction::class,
            FloorFunction::class,
            FModFunction::class,
            GetRandMaxFunction::class,
            HypotFunction::class,
            LogFunction::class,
            LogOnePFunction::class,
            LogTenFunction::class,
            MaxFunction::class,
            MinFunction::class,
            MTGetRandMaxFunction::class,
            MTRandFunction::class,
            PowFunction::class,
            RadToDegFunction::class,
            RandFunction::class,
            RoundFunction::class,
            SinFunction::class,
            SinHFunction::class,
            SqrtFunction::class,
            TanFunction::class,
            TanHFunction::class,
        ];

        return $symbols;
    }

}