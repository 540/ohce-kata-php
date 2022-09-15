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
    public function returnsReverseWordIfIsNotPalindrome()
    {
        $ohce = new Ohce();

        $result = $ohce->inputHandler('word');

        $this->assertEquals('drow', $result);
    }

    /**
     * @test
     */
    public function returnsSpecialAnswerIfIsPalindrome()
    {
        $ohce = new Ohce();

        $result = $ohce->inputHandler('somos');

        $this->assertEquals('somos ¡Bonita palabra!', $result);
    }
}
