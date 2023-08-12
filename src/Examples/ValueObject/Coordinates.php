<?php

namespace Domain\Examples\ValueObject;

use Domain\DomainBase\VO;

readonly class Coordinates extends VO
{
    const EARTH_RADIUS_KM = 6371;

    public function __construct(
        public float $latitude,
        public float $longitude,
    ){}

    public function distanceInKm(Coordinates $point): float
    {
        $latDiff = deg2rad($point->latitude - $this->latitude);
        $lonDiff = deg2rad($point->longitude - $this->longitude);

        $a = sin($latDiff / 2) * sin($latDiff / 2);
        $b = cos(deg2rad($this->latitude)) * cos(deg2rad($point->latitude)) * sin($lonDiff / 2) * sin($lonDiff / 2);
        $c = 2 * atan2(sqrt($a + $b), sqrt(1 - ($a + $b)));

        return self::EARTH_RADIUS_KM * $c;
    }
    // ...
}
