<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 8/31/18
 * Time: 1:40 PM
 */

namespace app\classes;


class Dados
{
    private $start;
    private $end;
    private $lista;
    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end = $end;

    }

    public function iniciarLista()
    {
        return $this->lista = range($this->start, $this->end);
    }
}