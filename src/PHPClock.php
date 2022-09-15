<?php

namespace Deg540\PHPTestingBoilerplate;

class PHPClock implements Clock
{
    public function getHour(): int
    {
        return intval(date('H'));
    }
}
