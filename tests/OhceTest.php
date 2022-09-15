<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Ohce $ohce;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->ohce = new Ohce('Meetup');
    }

    /**
     * @test
     */
    public function returnsReverseWordIfIsNotPalindrome()
    {
        $result = $this->ohce->inputHandler('word');

        $this->assertEquals('drow', $result);
    }

    /**
     * @test
     */
    public function returnsSpecialAnswerIfIsPalindrome()
    {
        $result = $this->ohce->inputHandler('somos');

        $this->assertEquals('somos ¡Bonita palabra!', $result);
    }
    
    /**
     * @test
     */
    public function returnsByeIfWordIsExitWord()
    {
        $result = $this->ohce->inputHandler('Stop!');

        $this->assertEquals('Adios Meetup', $result);
    }
}
