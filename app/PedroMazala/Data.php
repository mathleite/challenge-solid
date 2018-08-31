<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 9:26 AM
 */

namespace app\PedroMazala;


class Data
{
    /**
     * @var array
     */
    private $list;
    /**
     * @var int
     */
    private $start;
    /**
     * @var int
     */
    private $end;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;

        $this->startList();
    }

    public function startList(): void
    {
        $this->list = range($this->start, $this->end);
    }

    public function hasNext(): bool
    {
        return count($this->list) > 0;
    }

    public function getNextItem(): int
    {
        return array_shift($this->list);
    }
}