<?php

namespace Domain\Shared\Domain\Examples\Entity;

use Domain\Shared\Domain\Entity;
use Domain\Shared\Domain\Examples\ValueObject\Address;

class User extends Entity
{
    public function __construct(
        public mixed $id,
        public string $name,
        public string $email,
        public ?Address $address = null,
    ){}
}
