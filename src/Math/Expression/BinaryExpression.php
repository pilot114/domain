<?php

namespace Domain\Math\Expression;

readonly class BinaryExpression extends Expression
{
    public function __construct(
        public Expression $a,
        public Expression $b,
        private string $operation
    ) {
    }

    public function exec()
    {
        if (!is_numeric($this->a) || !is_numeric($this->b)) {
            throw new \Exception('Non exec expression');
        }
        return match ($this->operation) {
            '+' => $this->a + $this->b,
            '-' => $this->a - $this->b,
            '*' => $this->a * $this->b,
            '/' => $this->a / $this->b,
            '**' => $this->a ** $this->b,
        };
    }

    public function isPow(): bool
    {
        return $this->operation === '**';
    }

    public function isSum(): bool
    {
        return $this->operation === '+';
    }

    public function isDiff(): bool
    {
        return $this->operation === '-';
    }

    public function isMult(): bool
    {
        return $this->operation === '*';
    }

    public function isQuotient(): bool
    {
        return $this->operation === '/';
    }

    public function isChain(): bool
    {
        return $this->operation === '**';
    }
}
