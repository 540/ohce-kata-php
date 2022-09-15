<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function inputHandler(string $word): string
    {
        if ($this->isPalindrome($word)) {
            return $word . ' ¡Bonita palabra!';
        } else {
            return $this->reverse($word);
        }
    }

    public function reverse(string $word): string
    {
        return strrev($word);
    }

    public function isPalindrome(string $word): bool
    {
        return $word === $this->reverse($word);
    }
}
