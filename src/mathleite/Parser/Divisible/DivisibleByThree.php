<?php

namespace App\mathleite\Parser\Divisible;

class DivisibleByThree extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3;
    }

    public function getParsed(int $value)
    {
        return 'Fizz';
    }

}
