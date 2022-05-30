<?php

spl_autoload_register(function (string $nomeClasse){

    $caminhoArquivo =  __DIR__ . $nomeClasse;
    $caminhoArquivo = str_replace('src', 'src\\', $caminhoArquivo);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;

    } else {
        
        echo "Caminho \"$caminhoArquivo\" não encontrado!";
        exit();
    }

});