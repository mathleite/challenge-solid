<?php
namespace app\classes;
use app\interfaces\InterfaceSubstituir;

class SubstituiPor5 implements InterfaceSubstituir
{
    private $lista;
    public function __construct($lista)
    {
        $this->lista = $lista;
    }
    public function substituir(): Array
    {
        foreach ($this->lista as $key => $value) {
            if (is_numeric($value) && $value % 5 == 0) {
                $this->lista[$key] = "Bar";
            }
        }
        return $this->lista;
    }
}