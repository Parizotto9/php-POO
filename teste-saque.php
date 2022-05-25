<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, Cpf};
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};


$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Daniel',
        new Endereco('recife', 'piedade', 'rua', '322')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
