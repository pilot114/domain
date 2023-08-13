<?php

namespace Domain\FantasyRPG\Quest;

use Domain\FantasyRPG\Person\Player;

class Quest
{
    protected Player $player;

    public function __construct(
        protected Sequence $events, // последовательность событий
    ) {}

    // получение квеста
    public function start(Player $player)
    {
        $this->player = $player;
    }

    // подписка на события, влияющее на квест
    public function subscribe() {}

    // обработка события, влияющего на квест
    public function handle(Event $event) {}

    protected function finish(): void
    {
        // получение награды
        $this->player->setItem($this->creator->getReward());
    }
}
