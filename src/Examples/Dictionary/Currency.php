<?php

namespace Domain\Examples\Dictionary;

enum Currency: int
{
    case RUB = 1;
    case EURO = 2;
    case DOLLAR = 3;
}