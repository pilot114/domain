<?php

namespace Domain\Examples\Entity;

abstract class Entity
{
    public int $id;

    public function equal(Entity $other): bool
    {
        return $this->id === $other->id;
    }
}