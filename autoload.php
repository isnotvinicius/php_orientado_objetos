<?php

spl_autoload_register(function (string $NomeCompletoDaClasse){
    $CaminhoArquivo = str_replace('Alura\\Banco', 'src', $NomeCompletoDaClasse);
    $CaminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $CaminhoArquivo);
    $CaminhoArquivo .= '.php';
    if(file_exists($CaminhoArquivo)){
        require_once $CaminhoArquivo;
    }
}); // Função para fazer o require de todos os arquivos
