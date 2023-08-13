<?php

namespace Domain\FantasyRPG\Domain\World;

use Domain\FantasyRPG\Person\Character;
use Domain\Shared\Domain\Entity;

class Map extends Entity
{
    protected array $locations = [];
    protected array $characters = [];

    public function addLocation(Location $location): void
    {
        $this->locations[$location->id] = $location;
    }

    public function removeLocation(Location $location): void
    {
        unset($this->locations[$location->id]);
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function addCharacter(Character $character): void
    {
        $this->characters[$character->id] = $character;
    }

    public function removeCharacter(Character $character): void
    {
        unset($this->characters[$character->id]);
    }

    public function getCharacters(): array
    {
        return $this->characters;
    }

    public function moveCharacterToLocation(Character $character, Location $location): void
    {
        if (isset($this->characters[$character->id]) && isset($this->locations[$location->id])) {
            $character->setLocation($location);
        }
    }
}
