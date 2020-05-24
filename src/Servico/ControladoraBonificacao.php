<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladoraBonificacao
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificaco(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacoes;
    }
}