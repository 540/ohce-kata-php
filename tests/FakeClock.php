<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Clock;

class FakeClock implements Clock
{
    private int $hour;

    public function __construct(int $hour)
    {
        $this->hour = $hour;
    }

    public function getHour(): int
    {
        return $this->hour;
    }
}
