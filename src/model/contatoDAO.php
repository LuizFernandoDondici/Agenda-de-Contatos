<?php

namespace AgendaDeContatos\Src\Model;

use AgendaDeContatos\Src\Config\Connect;

class ContatoDAO
{

    private $conn;
    

    public function __construct()
    {
        $this->conn = Connect::createConnection();
    }

    
    public function createContato(Contato $contato):bool
    {
        try {
            
            $insertQuery = 
                'INSERT INTO contatos
                (nome, telefone, celular, email, data_nascimento, 
                cep, rua, numero, complemento, bairro, cidade, uf) 
                VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';

            $stmt = $this->conn->prepare($insertQuery);

            $stmt->bindParam(1, $contato->getName());
            $stmt->bindParam(2, $contato->getTel());
            $stmt->bindParam(3, $contato->getCel());
            $stmt->bindParam(4, $contato->getEmail());
            $stmt->bindParam(5, $contato->getBirthday());
            $stmt->bindParam(6, $contato->getCep());
            $stmt->bindParam(7, $contato->getStreet());
            $stmt->bindParam(8, $contato->getNum());
            $stmt->bindParam(9, $contato->getComp());
            $stmt->bindParam(10, $contato->getDistrict());
            $stmt->bindParam(11, $contato->getCity());
            $stmt->bindParam(12, $contato->getUf());

            return $stmt->execute();

        } catch (\Throwable $th) {
            echo 'erro insert';
        }
    }


    public function findAllContacts():array
    {
        try {
            
            $selectQuery = 'SELECT id, nome FROM contatos;';

            $stmt = $this->conn->prepare($selectQuery);

            $stmt->execute();

            $listContato = $stmt->fetchAll();

            return $listContato;

        } catch (\Throwable $th) {
            echo 'erro select';
        }
    }

}