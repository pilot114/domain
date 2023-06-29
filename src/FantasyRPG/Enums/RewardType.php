<?php

namespace Domain\FantasyRPG\Enums;

enum RewardType: int
{
    use Random;

    case GOLD = 1;
    case EXP = 2;
    case UNLOCK = 3;
}
