<?php

namespace Domain\FantasyRPG\Enums;

enum QuestTarget: int
{
    use Random;

    case FIND_ITEM = 1;
    case KILL_MONSTER = 2;
    case SAVE_HOSTAGE = 3; // спасти заложника
    case DELIVERY = 4;
    case FIND_INFO = 5;
}
