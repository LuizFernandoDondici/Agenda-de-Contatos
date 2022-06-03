<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\ContatoDAO;

class ListContatoController implements RequestController
{

    public function __construct()
    {
    }

    // Controlador que chama função para buscar contatos e renderiza para pagina de lista de contatos.

    public function processRequest(): void
    {
        
        $contatoDAO = new ContatoDAO();

        $listContato = $contatoDAO->findAllContatos();

        require __DIR__ . "../../view/body/list-contato.php";

    }

}