<?php

namespace Deg540\PHPTestingBoilerplate;

class PHPClock extends Clock
{
    public function getHour(): int
    {
        return intval(date('H'));
    }
}
