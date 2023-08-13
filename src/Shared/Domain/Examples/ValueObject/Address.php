<?php

namespace Domain\Shared\Domain\Examples\ValueObject;

use Domain\Shared\Domain\VO;

readonly class Address extends VO
{
    public function __construct(
        public string $street,
        public string $city,
        public string $country,
    ) {}

    public function __toString(): string
    {
        return "$this->country / $this->city - $this->street";
    }
    // ...
}
