<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/pfp/'){
    require 'controllers/index.php';
} 
elseif ($uri === '/pfp/about') {
    require 'controllers/about.php';
} 
elseif ($uri === '/pfp/contact') {
    require 'controllers/contact.php';
}else{
    require 'controllers/404.php';

}