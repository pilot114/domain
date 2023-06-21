<?php

namespace Domain\Examples\ValueObject;

abstract readonly class VO
{
    public function equal(VO $other): bool
    {
        foreach($this as $key => $value) {
            if ($value !== $other->$key) {
                return false;
            }
        }
        return true;
    }
}