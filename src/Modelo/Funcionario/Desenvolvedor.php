<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeNivel()
    {
        $this->aumentoSalario($this->getSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}