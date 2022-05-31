<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\Contato;
use AgendaDeContatos\Src\Model\ContatoDAO;

class UpdateContatoController implements RequestController
{

    public function __construct()
    {
    }

    public function processRequest(): void
    {
        
        $contato = new Contato(
            $_GET['id'], 
            $_POST['name'], 
            $_POST['tel'], 
            $_POST['cel'], 
            $_POST['email'], 
            $_POST['birthday'], 
            $_POST['cep'], 
            $_POST['street'], 
            $_POST['num'], 
            $_POST['comp'], 
            $_POST['district'], 
            $_POST['city'],
             $_POST['uf']
        );

        $contatoDAO = new ContatoDAO();

        $contatoDAO->updateContato($contato);

    }

}