<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function inputHandler(string $word): string
    {
        if ($word === 'Stop!') {
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
}
