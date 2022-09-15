<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Clock;
use Deg540\PHPTestingBoilerplate\Ohce;
use Deg540\PHPTestingBoilerplate\PHPClock;
use Mockery;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function returnsReverseWordIfIsNotPalindrome()
    {
        $clock = new DummyClock();
        $ohce = new Ohce($clock);
        
        $result = $ohce->inputHandler('word');

        $this->assertEquals('drow', $result);
    }

    /**
     * @test
     */
    public function returnsSpecialAnswerIfIsPalindrome()
    {
        $clock = new DummyClock();
        $ohce = new Ohce($clock);
        
        $result = $ohce->inputHandler('somos');

        $this->assertEquals('somos ¡Bonita palabra!', $result);
    }
    
    /**
     * @test
     */
    public function returnsByeIfWordIsExitWord()
    {
        $clock = new DummyClock();
        $ohce = new Ohce($clock);

        $ohce->greet('Meetup');
        $result = $ohce->inputHandler('Stop!');

        $this->assertEquals('Adios Meetup', $result);
    }

    /**
     * @test
     */
    public function greetsAUserInTheMorning()
    {
        $clock = new FakeClock(10);
        $ohce = new Ohce($clock);
        
        $result = $ohce->greet('Meetup');

        $this->assertEquals('¡Buenos días Meetup!', $result);
    }

    /**
     * @test
     */
    public function greetsAUserInTheAfternoon()
    {
        $clock = new FakeClock(17);
        $ohce = new Ohce($clock);
        
        $result = $ohce->greet('Meetup');

        $this->assertEquals('¡Buenas tardes Meetup!', $result);
    }

    /**
     * @test
     */
    public function greetsAUserAtNight()
    {
        $clock = new FakeClock(3);
        $ohce = new Ohce($clock);
        
        $result = $ohce->greet('Meetup');

        $this->assertEquals('¡Buenas noches Meetup!', $result);
    }
}
