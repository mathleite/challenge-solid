<?php
require_once 'vendor/autoload.php';

use app\classes\Contador;
use app\classes\Listar;
use app\classes\SubstituiPor3;
use app\classes\SubstituiPor5;
use app\classes\SubstituiPor3e5;
use app\classes\Dados;

$contador = new Dados(1,15);
$lista = $contador->iniciarLista();

$substituicaoPor3e5 = new SubstituiPor3e5($lista);
$listaSub3e5 = $substituicaoPor3e5->substituir();

$substituicaoPor3 = new SubstituiPor3($listaSub3e5);
$listaSub3 = $substituicaoPor3->substituir();

$substituicaoPor5 = new SubstituiPor5($listaSub3);
$listaSub5 = $substituicaoPor5->substituir();

$listar = new Listar($listaSub5);
$listar->listar();

