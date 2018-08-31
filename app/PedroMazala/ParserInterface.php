<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:30 AM
 */

namespace app\PedroMazala;


interface ParserInterface
{
    public function next(): ?ParserInterface;

    public function match(int $value): bool;

    public function parse(int $value);
}