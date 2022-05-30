<?php

namespace Controller;

use Controller\Interface\RequestController;

class formCadastrarController implements RequestController
{

    public function __construct()
    {
    }

    public function processRequest(): void
    {
        require __DIR__ . "../../view/body/form-cadastrar.php";
    }

}