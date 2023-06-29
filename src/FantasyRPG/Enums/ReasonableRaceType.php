<?php

namespace Domain\FantasyRPG\Enums;

enum ReasonableRaceType: int
{
    use Random;

    case HUMAN = 1;
    case HARSIT = 2;
    case ELF = 3;
}
