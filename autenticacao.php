<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';


$autentica = new Autenticador();
$diretor = new Diretor('Vinicius', new CPF('123.456.789-10'), 5000);

$autentica->login($diretor, '4321');

