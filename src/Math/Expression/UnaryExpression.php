<?php

namespace Domain\Math\Expression;

readonly class UnaryExpression extends Expression
{
    public function __construct(
        private string $a,
        private string $operation
    ) {
    }

    public function exec()
    {
        if (!is_numeric($this->a)) {
            throw new \Exception('Non exec expression');
        }
        return match ($this->operation) {
            '-' => -$this->a,
        };
    }

    public function isConst(): bool
    {
        return is_numeric($this->a);
    }
}
