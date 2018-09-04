<?php
namespace App\mathleite\Parser\Divisible;

class DivisibleByOne extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 1;
    }

    public function getParsed(int $value)
    {
        return $value;
    }

}
