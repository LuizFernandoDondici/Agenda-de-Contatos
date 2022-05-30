<?php

namespace AgendaDeContatos\Src\Controller;

use AgendaDeContatos\Src\Controller\Interface\RequestController;

class FormRegisterController implements RequestController
{

    public function __construct()
    {
    }

    public function processRequest(): void
    {
        require __DIR__ . "../../view/body/form-register.php";
    }

}