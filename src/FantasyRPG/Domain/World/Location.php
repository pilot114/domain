<?php

namespace Domain\FantasyRPG\Domain\World;

use Domain\Shared\Domain\Entity;

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
