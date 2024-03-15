<?php

$router->get('/pfp/', 'controllers/index.php');
$router->get('/pfp/about', 'controllers/about.php');
$router->get('/pfp/contact', 'controllers/contact.php');


$router->get('/pfp/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/pfp/note', 'controllers/notes/show.php');
$router->delete('/pfp/note', 'controllers/notes/destroy.php');

$router->get('/pfp/notes/create', 'controllers/notes/create.php');
$router->post('/pfp/notes', 'controllers/notes/store.php');


$router->get('/pfp/register', 'controllers/registration/create.php')->only('guest');
$router->post('/pfp/register', 'controllers/registration/store.php');

$router->get('/pfp/login', 'controllers/session/create.php')->only('guest');
$router->post('/pfp/session', 'controllers/session/store.php')->only('guest');
$router->delete('/pfp/session', 'controllers/session/destroy.php')->only('auth');

