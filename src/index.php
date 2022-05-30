<?php

require './autoload.php';


use AgendaDeContatos\Src\Route\Route;

$route = new Route();

$route->setRoute($_SERVER['PATH_INFO']);