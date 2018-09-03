<?php
require_once 'vendor/autoload.php';

use app\classes\Dados;
use app\classes\DivisibleByFifteen;
use app\classes\DivisibleByThree;
use app\classes\DivisibleByFive;
use app\classes\Listed;
use app\classes\Execute;

$executor = new Execute();

$data = new Dados(1,15);
$list = $data->iniciarLista();

$divisibleByFifteen = new DivisibleByFifteen($list);
$listFifteen = $executor->execute($divisibleByFifteen);

$divisibleByThree = new DivisibleByThree($listFifteen);
$listThree = $executor->execute($divisibleByThree);

$divisibleByFive = new DivisibleByFive($listThree);
$listFive = $executor->execute($divisibleByFive);

$listeding = new Listed($listFive);
$listeding->listar();

