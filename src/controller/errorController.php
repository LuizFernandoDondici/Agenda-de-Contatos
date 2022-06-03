<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;

class ErrorController implements RequestController
{

    public function __construct()
    {
    }

    // Controlador que renderiza para pagina de erro.

    public function processRequest(): void
    {
        require __DIR__ . "../../view/body/pag-error.php";
    }

}