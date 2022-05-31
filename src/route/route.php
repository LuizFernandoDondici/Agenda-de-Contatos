<?php

namespace AgendaDeContatos\Src\Route;

use AgendaDeContatos\Src\Controller\DeleteContatoController;
use AgendaDeContatos\Src\Controller\FormRegisterController;
use AgendaDeContatos\Src\Controller\ListContatoController;
use AgendaDeContatos\Src\Controller\SaveContatoController;
use AgendaDeContatos\Src\Controller\SelectContatoController;
use AgendaDeContatos\Src\Controller\UpdateContatoController;

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
        
            case '/lista-contato':
                $controller = new ListContatoController();
                break;
            
            case '/visualizar-contato':
                $controller = new SelectContatoController();
                break; 

            case '/editar-contato':
                $controller = new SelectContatoController();
                break;
    
            case '/atualizar-contato':
                $controller = new UpdateContatoController();
                break;

            case '/deletar-contato':
                $controller = new DeleteContatoController();
                break;
        }        

        $controller->processRequest();
    }

}