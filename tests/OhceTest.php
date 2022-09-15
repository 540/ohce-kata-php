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

    /**
     * @test
     */
    public function checksIsNotPalindrome()
    {
        $ohce = new Ohce();

        $result = $ohce->isPalindrome('hola');

        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function checksIsPalindrome()
    {
        $ohce = new Ohce();

        $result = $ohce->isPalindrome('somos');

        $this->assertTrue($result);
    }
}
