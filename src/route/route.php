<?php

namespace Route;

use Controller\formCadastrarController;

class Route
{

    public function setRoute(String $path):void
    {
        
        switch ($path) {
            
            case '/formulario-contato':
                $controller = new formCadastrarController();
                break; 
        
        }        

        $controller->processRequest();
    }

}