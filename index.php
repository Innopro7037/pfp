<?php

session_start();

require 'Core/functions.php';
require 'Core/Database.php';
require 'Core/Response.php';
require 'Core/Router.php';

$router = new Router();

$routes = require 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);




