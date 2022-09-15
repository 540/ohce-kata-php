<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Clock;

class DummyClock implements Clock
{
    public function getHour(): int
    {
        return 0;
    }
}
