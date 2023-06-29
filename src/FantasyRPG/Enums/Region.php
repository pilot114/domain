<?php

namespace Domain\FantasyRPG\Enums;

enum Region: int
{
    use Random;

    case SELENOR = 1; // древняя страна, забытые земли
    case HARSIBAND = 2; // миролюбивый край с изобретательным народом
    case MELIN_FOGEL = 3; // условный оплот зла
    case A = 4; // средневековый мегаполис
    case B = 5; // земли магического хаоса
    case C = 6;
    case D = 7; // секретная локация
}
