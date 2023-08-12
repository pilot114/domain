<?php

namespace Domain\FantasyRPG\Person;

use Domain\DomainBase\Entity;
use Domain\FantasyRPG\World\Location;

/**
 * Основные характеристики и связанные с ними базовые механики
 */
class Character extends Entity
{
    protected int $experience = 0;
    protected int $level = 1;

    protected int $health = 100;
    protected int $stamina = 100;
    protected int $mana = 100;

    protected ?Location $location = null;

    public function __construct(
        public mixed $id,
        protected Attributes $attributes,
    ) {}

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Прогрессивная шкала опыта
     * 1 = 100
     * 2 = 400
     * 3 = 900
     * 4 = 1600
     * 5 = 2500
     * ...
     */
    public function exp(int $value): void
    {
        $this->experience += $value;
        if ($this->experience > (($this->level ^ 2) * 100)) {
            $this->level++;
            // TODO: level up event
        }
    }

    public function cure(int $value): void
    {
        $this->health = min($this->health + $value, $this->attributes->healthMax);
    }

    public function damage(int $value, string $personIdentity): void
    {
        $this->health = max($this->health - $value, 0);
        if ($this->health === 0) {
            // TODO: death event
        }
    }

    public function relax(int $value): void
    {
        $this->stamina = min($this->stamina + $value, $this->attributes->staminaMax);
    }

    public function tired(int $value): void
    {
        $this->stamina = max($this->stamina - $value, 0);
    }

    public function meditate(int $value): void
    {
        $this->mana = min($this->mana + $value, $this->attributes->manaMax);
    }

    public function wiz(int $value): void
    {
        $this->mana = max($this->mana - $value, 0);
    }
}
