<?php
require_once __DIR__ . '/../vendor/autoload.php';


$data = new \App\mathleite\Data(1, 100);

$one = new \App\mathleite\Parser\Divisible\DivisibleByOne();
$three = new \App\mathleite\Parser\Divisible\DivisibleByThree($one);
$five = new \App\mathleite\Parser\Divisible\DivisibleByFive($three);
$fifteen = new \App\mathleite\Parser\Divisible\DivisibleByFifteen($five);

$parser = new \App\mathleite\Parser($fifteen, $data);

$parsedValues = $parser->parse();

foreach ($parsedValues as $value) {
    print $value . PHP_EOL;
}
