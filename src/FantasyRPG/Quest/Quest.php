<?php

namespace Domain\FantasyRPG\Quest;

use Domain\FantasyRPG\Enums\NPCType;

class Quest
{
    protected Player $player;

    public function __construct(
        protected Sequence $events, // последовательность событий
        protected ?NPC $creator,    // Кто выдает задание
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
