<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Clock;

class DummyClock extends Clock
{
    protected function getHour(): int
    {
        return 0;
    }
}
