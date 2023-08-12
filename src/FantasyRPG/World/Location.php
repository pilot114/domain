<?php

namespace Domain\FantasyRPG\World;

use Domain\DomainBase\Entity;

class Location extends Entity
{
    public readonly string $name;
    public readonly string $description;

    public function __construct(mixed $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
}
