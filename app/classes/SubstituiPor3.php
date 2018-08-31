<?php
namespace app\classes;
use app\interfaces\InterfaceSubstituir;

class SubstituiPor3 implements InterfaceSubstituir
{
    private $lista;
    public function __construct($lista)
    {
        $this->lista = $lista;
    }

    public function substituir(): Array
    {
        foreach ($this->lista as $key => $value) {
            if(is_numeric($value) && $value % 3 == 0){
                $this->lista[$key] = "Fizz";
            }
        }
        return $this->lista;
    }
}