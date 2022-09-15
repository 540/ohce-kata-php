<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    /**
     * @test
     */
    public function isMorningIfHourIsBetween6And12()
    {
        $clock = new FakeClock(10);

        $this->assertTrue($clock->isMorning());
        $this->assertFalse($clock->isAfternoon());
    }

    /**
     * @test
     */
    public function isAfternoonIfHourIsBetween12And20()
    {
        $clock = new FakeClock(17);

        $this->assertTrue($clock->isAfternoon());
        $this->assertFalse($clock->isMorning());
    }
}
