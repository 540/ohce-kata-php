<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function reversesAWord()
    {
        $ohce = new Ohce();

        $result = $ohce->reverse('word');

        $this->assertEquals('drow', $result);
    }
}
