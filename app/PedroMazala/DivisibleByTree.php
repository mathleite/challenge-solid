<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:38 AM
 */

namespace app\PedroMazala;


class DivisibleByTree extends AbstractDivisibleParser
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