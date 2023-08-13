<?php

namespace Domain\Сhemistry\Domain\Entity;

/** условия реакции */
class Circs
{
    protected function __construct(
        protected float $temperature,
        protected float $pressure,
    ){}
}