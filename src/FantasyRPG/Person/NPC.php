<?php

namespace Domain\FantasyRPG\Person;

class NPC extends Character
{
    public readonly string $name;

    public function __construct($id, Attributes $attributes, string $name)
    {
        parent::__construct($id, $attributes);
        $this->name = $name;
    }
}
