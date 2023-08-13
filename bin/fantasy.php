<?php

include '../vendor/autoload.php';

use Domain\FantasyRPG\Person\Attributes;
use Domain\FantasyRPG\Person\NPC;
use Domain\FantasyRPG\Domain\World\Location;
use Domain\FantasyRPG\Domain\World\Map;

$location1 = new Location(1, 'Город', 'Оживленный город, полный торговцев и жителей.');
$location2 = new Location(2, 'Лес', 'Густой лес, исполненный загадок и опасностей.');

$baseAttributes = new Attributes();

$npc1 = new NPC(1, $baseAttributes, 'Торговец');
$npc2 = new NPC(2, $baseAttributes, 'Бандит');

$worldMap = new Map();

$worldMap->addLocation($location1);
$worldMap->addLocation($location2);

$worldMap->addCharacter($npc1);
$worldMap->addCharacter($npc2);

$worldMap->moveCharacterToLocation($npc1, $location1);
$worldMap->moveCharacterToLocation($npc2, $location2);

$locations = $worldMap->getLocations();
$npcs = $worldMap->getCharacters();

/**
 * @var Location $location
 */
foreach ($locations as $location) {
    echo 'Локация: ' . $location->name . ' - ' . $location->description . PHP_EOL;
}
/**
 * @var NPC $npc
 */
foreach ($npcs as $npc) {
    echo 'NPC: ' . $npc->name . ' - Текущая локация: ' . $npc->getLocation()->name . PHP_EOL;
}
