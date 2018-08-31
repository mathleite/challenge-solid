<?php
namespace app\classes;
require_once '../../vendor/autoload.php';
class App
{
    protected $contador;
    protected $substituicao;
    protected $listar;
    public function __construct(Contador $contador, Substituicao $substituicao, Listar $listar)
    {
        $this->contador = $contador;
        $this->substituicao = $substituicao;
        $this->listar = $listar;
    }

    public function start()
    {
        $contador = $this->contador->count();
        $substituir = $this->substituicao->substituicao($contador);
        $this->listar->listar($substituir);
    }
}