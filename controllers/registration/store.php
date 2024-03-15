<?php

require 'Core/Validator.php';

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form input
$errors = [];

if (!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}
if (!Validator::string($password, 7, 255)){
    $errors['password'] = 'Please provide a password of atleast 7 characters';
}

if (!empty($errors)) {
    require 'views/registration/create.view.php';
}

$config = require('config.php');
$db = new Database($config['database']);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user){
    header('location: /pfp/');
    exit();
} else {
    $db->query('INSERT into users(email, password) values(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // mark that the user has logged in

    login($user);

    header('location: /pfp/notes');
    exit();
}


