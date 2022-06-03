<?php

require './autoload.php';

ob_clean();

use AgendaDeContatos\Src\Route\Route;

$route = new Route();

$route->setRoute($_SERVER['PATH_INFO']);