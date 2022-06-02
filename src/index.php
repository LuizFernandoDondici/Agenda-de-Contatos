<?php

require './autoload.php';


use AgendaDeContatos\Src\Route\Route;

$route = new Route();

$path = $_SERVER['PATH_INFO'];

if ($_SERVER['PATH_INFO'] == null) {
    $path = '/lista-contato';
}

ob_clean();

$route->setRoute($path);