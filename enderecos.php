<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco(  'Mogi', 'Rodeio', 'A', '85');
$endereco2 = new Endereco('SP', 'Novo', 'B', '79');

echo $endereco->rua;


