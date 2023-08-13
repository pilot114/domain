<?php

namespace Domain\Сhemistry\Domain\Entity;

use Domain\Shared\Domain\Entity;

class Reaction extends Entity
{
    protected function __construct(
        protected Circs $circs,
        /** array<Substance, int> */
        protected array $reagents = [],
        /** array<Substance, int> */
        protected array $products = [],
        /** array<Substance, int> */
        protected array $catalysts = [],
        // влияние примесей
        protected float $influenceOfImpurities = 0,
    ) {}

    public function fromFormula(string $formula): void
    {
    }

    public function __toString(): string
    {
        // формула реакции
        return '';
    }
}