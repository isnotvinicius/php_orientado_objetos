<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Usuário logado no sistema";
        }else{
            echo "Ops. Login inválido";
        }
    }
}