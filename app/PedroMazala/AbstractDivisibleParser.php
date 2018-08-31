<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:32 AM
 */

namespace app\PedroMazala;


abstract class AbstractDivisibleParser implements ParserInterface
{
    /**
     * @var ParserInterface|null
     */
    private $next;

    public function __construct(?ParserInterface $next = null)
    {
        $this->next = $next;
    }

    public function next(): ?ParserInterface
    {
        return $this->next;
    }

    public function match($value): bool
    {
        return ($value % $this->getDivisor() === 0);
    }

    /**
     * @param int $value
     * @return mixed
     */
    public function parse(int $value)
    {
        if ($this->match($value)) {
            return $this->getParsed($value);
        }

        return $this->next()->parse($value);
    }

    abstract protected function getDivisor(): int;

    abstract protected function getParsed(int $value);
}