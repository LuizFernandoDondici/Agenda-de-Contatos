<?php

require './autoload.php';


use Route\Route;

$route = new Route();

$route->setRoute($_SERVER['PATH_INFO']);