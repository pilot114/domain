<?php

namespace Domain\Math;

use Domain\Math\Expression\{
    BinaryExpression, UnaryExpression
};

class Differentiation
{
    static function exec(BinaryExpression | UnaryExpression $expression)
    {
        return match (true) {
            $expression->isConst() => 0,
            $expression->isPow() => new BinaryExpression(
                $expression->b,
                new BinaryExpression($expression->a, $expression->b -1, '**'),
                '*',
            ),
            // операции над функциями
            $expression->isSum() => 0,
            $expression->isDiff() => 0,
            $expression->isMult() => 0,
            $expression->isQuotient() => 0,
            // вложенные функции
            $expression->isChain() => 0,
        };
    }
}
