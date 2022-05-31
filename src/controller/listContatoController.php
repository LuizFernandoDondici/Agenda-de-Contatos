<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\ContatoDAO;

class ListContatoController implements RequestController
{

    public function __construct()
    {
    }

    public function processRequest(): void
    {
        
        $contatoDAO = new ContatoDAO();

        $listContato = $contatoDAO->findAllContacts();

        require __DIR__ . "../../view/body/list-contato.php";

    }

}