<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:37 AM
 */

namespace app\PedroMazala;


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