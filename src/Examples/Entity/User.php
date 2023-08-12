<?php

namespace Domain\Examples\Entity;

use Domain\DomainBase\Entity;
use Domain\Examples\ValueObject\Address;

class User extends Entity
{
    public function __construct(
        public mixed $id,
        public string $name,
        public string $email,
        public ?Address $address = null,
    ){}
}
