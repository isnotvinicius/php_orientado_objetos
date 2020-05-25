<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = "get" . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $value): void{
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}