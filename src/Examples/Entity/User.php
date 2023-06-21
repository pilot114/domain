<?php

namespace Domain\Examples\Entity;

use Domain\Examples\ValueObject\Address;

class User extends Entity
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
        public ?Address $address = null,
    ){}
}