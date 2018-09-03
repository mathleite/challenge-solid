<?php
namespace app\classes;
use app\interfaces\InterfaceListar;

class Listed implements InterfaceListar
{
    private $lista;
    public function __construct($lista)
    {
        $this->lista = $lista;
    }

    public function listar(): array
    {
        foreach ($this->lista as $key => $value){
            echo '<pre>';
            echo 'Posição: ';
            print_r($key." => ");
            print_r($value. PHP_EOL);
        }
        return $this->lista;
    }
}