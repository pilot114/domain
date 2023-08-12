<?php

namespace Domain\DomainBase;

abstract class Entity
{
    public mixed $id;

    public function equal(Entity $other): bool
    {
        return $this->id === $other->id;
    }
}
