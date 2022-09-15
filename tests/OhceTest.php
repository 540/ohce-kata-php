<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Clock;
use Deg540\PHPTestingBoilerplate\Ohce;
use Deg540\PHPTestingBoilerplate\PHPClock;
use Mockery;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    private Clock $clock;
    private Ohce $ohce;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->clock = Mockery::mock(Clock::class);
        $this->ohce = new Ohce($this->clock);
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
        $this->clock->shouldReceive('isMorning')
            ->withNoArgs()
            ->once()
            ->andReturn(true);

        $this->ohce->greet('Meetup');
        $result = $this->ohce->inputHandler('Stop!');

        $this->assertEquals('Adios Meetup', $result);
    }

    /**
     * @test
     */
    public function greetsAUserInTheMorning()
    {
        $this->clock->shouldReceive('isMorning')
            ->withNoArgs()
            ->once()
            ->andReturn(true);
        
        $result = $this->ohce->greet('Meetup');

        $this->assertEquals('¡Buenos días Meetup!', $result);
    }

    /**
     * @test
     */
    public function greetsAUserInTheAfternoon()
    {
        $this->clock->shouldReceive('isMorning')
            ->withNoArgs()
            ->once()
            ->andReturn(false);
        $this->clock->shouldReceive('isAfternoon')
            ->withNoArgs()
            ->once()
            ->andReturn(true);
        
        $result = $this->ohce->greet('Meetup');

        $this->assertEquals('¡Buenas tardes Meetup!', $result);
    }

    /**
     * @test
     */
    public function greetsAUserAtNight()
    {
        $this->clock->shouldReceive('isMorning')
            ->withNoArgs()
            ->once()
            ->andReturn(false);
        $this->clock->shouldReceive('isAfternoon')
            ->withNoArgs()
            ->once()
            ->andReturn(false);
        
        $result = $this->ohce->greet('Meetup');

        $this->assertEquals('¡Buenas noches Meetup!', $result);
    }
}
