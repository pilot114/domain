<?php

namespace Domain\Shared\Domain\Examples\ValueObject;

use Domain\Shared\Domain\Examples\Dictionary\Currency;
use Domain\Shared\Domain\VO;

readonly class Money extends VO
{
    public function __construct(
        public float $amount,
        public Currency $currency = Currency::RUB,
    ){}

    public function add(Money $money): Money
    {
        if ($this->currency !== $money->currency) {
            throw new \DomainException('Cannot add money with different currencies');
        }
        return new Money($this->amount + $money->amount, $this->currency);
    }
    // ...
}
