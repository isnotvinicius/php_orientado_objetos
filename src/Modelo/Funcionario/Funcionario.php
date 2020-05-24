<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function aumentoSalario(float $valorAumentar): void
    {
        if($valorAumentar < 0){
            echo "O valor deve ser positivo";
            return;
        }

        $this->salario += $valorAumentar;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
