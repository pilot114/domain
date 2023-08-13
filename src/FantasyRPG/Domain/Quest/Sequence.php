<?php

namespace Domain\FantasyRPG\Quest;

/**
 * state-machine для последовательности действий в квесте
 *
 * [0 => state1, 1 => state2, 2 => state3]
 * [
 *      [0, 1],
 *      [1, 2],
 *      [1, 3],
 * ]
 */
class Sequence
{
    public function __construct(
        protected array $states,
        protected array $transition,
    ) {}


}
