<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Desenvolvedor, Gerente};
use Alura\Banco\Servico\ControladoraBonificacao;

$umFuncionario = new Desenvolvedor('Vinicius', new CPF('123.456.789-10'),  1000);
$umaFuncionaria = new Gerente('Patricia', new CPF('987.654.321-10'), 3000);
$diretor = new Diretor('Ana Paula', new CPF('123.334.532-23'), 5000);

$controle = new ControladoraBonificacao();
$controle->adicionaBonificaco($umFuncionario);
$controle->adicionaBonificaco($umaFuncionaria);
$controle->adicionaBonificaco($diretor);
echo $controle->getTotal();

