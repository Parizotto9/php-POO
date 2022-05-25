<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor, EditorVideo};

$umFuncionario = new Desenvolvedor('Daniel Parizotto', new Cpf('123.456.789-10'), 10000);

$umFuncionario->sobeDeNivel();

$umFuncionario2 = new Gerente('Paidozoto', new Cpf('123.456.789-10'), 3000);

$umEditor = new EditorVideo('pedrin',  new Cpf('123.456.789-10'), 1500);

$umDiretor = new Diretor('ano paulo', new Cpf('123.456.789-10'), 5000);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umFuncionario2);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
