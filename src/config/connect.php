<?php

namespace AgendaDeContatos\Src\Config;

use PDO;

class Connect
{

    // Função estatica que cria uma conexão, a tabela 'contatos' e retorna um objeto PDO.
    
    public static function createConnection()
    {
        try {
            
            $pdo = new PDO ('sqlite:'. __DIR__ .'../../database/agenda-contatos.sqlite');

            $query = 
                'CREATE TABLE IF NOT EXISTS contatos(
                    id INTEGER PRIMARY KEY,
                    nome TEXT,
                    telefone TEXT,
                    celular TEXT,
                    email TEXT,
                    data_nascimento TEXT,
                    cep TEXT,
                    rua TEXT,
                    numero TEXT,
                    complemento TEXT,
                    bairro TEXT,
                    cidade TEXT,
                    uf TEXT
                );';

            $pdo->exec($query);

            return $pdo;

        } catch (\Throwable $th) {
            header('Location: /erro', true, 302);
        }
    }

}