<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;
use AgendaDeContatos\Src\Model\ContatoDAO;

class SelectContatoController implements RequestController
{

    public function __construct()
    {
    }

    // Controlador que chama função para buscar contatos pelo id e renderiza para pagina de formulario.

    public function processRequest(): void
    {

        $contatoDAO = new ContatoDAO();

        $contato = $contatoDAO->findContatoById($_GET['id']);

        require __DIR__ . "../../view/body/form-edit.php";

    }

}