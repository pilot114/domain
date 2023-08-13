<?php

namespace Domain\FantasyRPG\Enums;

enum EnemyType: int
{
    use Random;

    case GOBLIN = 1;
    case ORC = 2;
    case DRAGON = 3;
}
