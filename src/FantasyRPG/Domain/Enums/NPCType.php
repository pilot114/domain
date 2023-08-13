<?php

namespace Domain\FantasyRPG\Enums;

enum NPCType: int
{
    use Random;

    case VILLAGER = 1;
    case TRADER = 2;
    case STRANGER = 3;
}
