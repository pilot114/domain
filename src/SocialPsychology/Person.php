<?php

/**
 * "Личность" человека. Определяет его сознательное и бессознательное поведение
 */

class Person
{
    protected array $body; // первоначально генетика + воздействия на тело
    protected array $memory; // формируется комуникациями через восприятие: воспитание, обучение, риторика и прочие соц.связи
    // реакции в ответ на воздействия + мотивация, любопытство (интересы)
    // формируется через социальные установки - предрасположенность (склонность) субъекта к совершению определённого социального поведения
    protected array $behavior;
    /** @var array<Role>  */
    protected array $roles;

    // еще важные термины:
    // Конфликт
    // Социальное познание - методы изучения отдельных людей
}