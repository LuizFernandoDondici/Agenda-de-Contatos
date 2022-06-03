<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\ContatoDAO;

class DeleteContatoController implements RequestController
{

    public function __construct()
    {
    }

    // Controlador que chama função para deletar contato e renderiza para pagina de lista de contatos.

    public function processRequest(): void
    {

        $contatoDAO = new ContatoDAO();

        $contato = $contatoDAO->deleteContato($_GET['id']);

        header('Location: /lista-contato', true, 302);

    }

}