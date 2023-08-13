<?php

namespace Domain\Сhemistry\Domain\Enum;

enum AggregationState: string
{
    case GAS = 'G';
    case LIQUID = 'L';
    case SOLID = 'S';
    case AQUA = 'AQ';
}