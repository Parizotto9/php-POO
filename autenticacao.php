<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'Daniel parizotto',
    new Cpf('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
