<?php

namespace Deg540\PHPTestingBoilerplate;

abstract class Clock
{
    protected const MORNING_HOUR = 6;
    protected const AFTERNOON_HOUR = 12;
    protected const NIGHT_HOUR = 20;

    protected abstract function getHour(): int;

    public function isMorning(): bool
    {
        return $this->getHour() >= self::MORNING_HOUR && $this->getHour() < self::AFTERNOON_HOUR;
    }

    public function isAfternoon(): bool
    {
        return $this->getHour() >= self::AFTERNOON_HOUR && $this->getHour() < self::NIGHT_HOUR;
    }
}
