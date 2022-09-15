<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private const EXIT_WORD = 'Stop!';

    private string $username;
    private Clock $clock;

    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    public function greet(string $username): string
    {
        $this->username = $username;

        if ($this->clock->getHour() >= 6 && $this->clock->getHour() < 12) {
            return '¡Buenos días ' . $username . '!';
        }
        if ($this->clock->getHour() >= 12 && $this->clock->getHour() < 20) {
            return '¡Buenas tardes ' . $username . '!';
        }

        return '¡Buenas noches ' . $username . '!';
    }

    public function inputHandler(string $word): string
    {
        if ($this->isExitWord($word)) {
            return 'Adios ' . $this->username;
        }
        if ($this->isPalindrome($word)) {
            return $word . ' ¡Bonita palabra!';
        }

        return $this->reverse($word);
    }

    private function reverse(string $word): string
    {
        return strrev($word);
    }

    private function isPalindrome(string $word): bool
    {
        return $word === $this->reverse($word);
    }

    private function isExitWord(string $word): bool
    {
        return $word === self::EXIT_WORD;
    }
}
