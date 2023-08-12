<?php

namespace Domain\FantasyRPG\Person;

use Domain\DomainBase\VO;

readonly class Attributes extends VO
{
    public function __construct(
        public readonly int $healthMax = 100,
        public readonly int $staminaMax = 100,
        public readonly int $manaMax = 100,
        // 1-20, влияют на проверки
        public readonly int $strength = 10,
        public readonly int $agility = 10,
        public readonly int $perception = 10,
        public readonly int $intelligence = 10,
        public readonly int $charisma = 10,
    ) {}
}
