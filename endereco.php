<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('pedtrop', 'barirro1', 'rua1', '1');
$umEndereco2 = new Endereco('rio', 'barirro2', 'rua2', '2');


echo $umEndereco->rua . PHP_EOL;
echo $umEndereco->rua = 'petrolina';
/* echo $umEndereco . PHP_EOL;
echo $umEndereco2; */
