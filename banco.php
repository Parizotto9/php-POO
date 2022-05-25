<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('recife', 'piedade', 'rua', '322');
$danielCpf = new Cpf('123.456.789-10');
$daniel = new Titular($danielCpf, 'Daniel Parizotto', $endereco);
$primeiraConta = new Conta($daniel);
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($primeiraConta);
