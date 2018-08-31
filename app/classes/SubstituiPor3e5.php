<?php
namespace app\classes;
use app\interfaces\InterfaceSubstituir;

class SubstituiPor3e5 implements  InterfaceSubstituir
{
    private $lista;

    public function __construct($lista)
    {
        $this->lista = $lista;
    }

    public function substituir()
    {
        foreach ($this->lista as $key => $value) {
            if (is_numeric($value) && $value % 3 == 0 && $value % 5 == 0 ) {
                $this->lista[$key] = "TG";
            }
        }
        return $this->lista;
    }
}