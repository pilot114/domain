<?php

namespace Domain\Examples\ValueObject;

use Domain\DomainBase\VO;
use Domain\Examples\Dictionary\Currency;

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
