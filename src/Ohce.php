<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function reverse(string $word): string
    {
        return strrev($word);
    }

    public function isPalindrome(string $word): bool
    {
        return $word === $this->reverse($word);
    }
}
