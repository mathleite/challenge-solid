<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:52 AM
 */

namespace app\PedroMazala;


class DivisibleByFifteen extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 3*5;
    }

    protected function getParsed(int $value)
    {
        return "TG";
    }

}