<?php
namespace App\mathleite\Parser;

interface ParserInterface
{
    public function next(): ?ParserInterface;

    public function match(int $value): bool;

    public function parse(int $value);
}
