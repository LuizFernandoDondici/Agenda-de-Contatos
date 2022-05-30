<?php

namespace AgendaDeContatos\Src\Route;

use AgendaDeContatos\Src\Controller\FormRegisterController;
use AgendaDeContatos\Src\Controller\SaveContatoController;

class Route
{

    public function setRoute(String $path):void
    {
        
        switch ($path) {
            
            case '/formulario-contato':
                $controller = new FormRegisterController();
                break; 
            
            case '/salvar-contato':
                $controller = new SaveContatoController();
                break; 
            
        }        

        $controller->processRequest();
    }

}