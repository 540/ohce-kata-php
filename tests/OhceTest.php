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
    public function reversesHola()
    {
        $ohce = new Ohce();

        $result = $ohce->reverse('hola');

        $this->assertEquals('aloh', $result);
    }

    /**
     * @test
     */
    public function reversesAdios()
    {
        $ohce = new Ohce();

        $result = $ohce->reverse('adios');

        $this->assertEquals('soida', $result);
    }
}
