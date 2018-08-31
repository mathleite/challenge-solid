<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:51 AM
 */

namespace app\PedroMazala;


class DivisibleByFive extends AbstractDivisibleParser
{
    protected function getDivisor(): int
    {
        return 5;
    }

    protected function getParsed(int $value)
    {
        return "Bar";
    }

}