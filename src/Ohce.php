<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function inputHandler(string $word): string
    {
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
