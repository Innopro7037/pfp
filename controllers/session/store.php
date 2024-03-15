<?php

require 'Core/Validator.php';

// log in the user if the credentials match.
$email = $_POST['email'];
$password = $_POST['password'];

$config = require('config.php');
$db = new Database($config['database']);

$errors = [];

if (!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address';
}
if (!Validator::string($password)){
    $errors['password'] = 'Please provide a valid password';
}

if (! empty($errors)) {
    return require('views/sessions/create.view.php');
}

// match the credentials..
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
    
        login([
            'email' => $email
        ]);
    
        header('location: /pfp/');
        die();
    }
} 


$errors['email'] = 'No matching accounts found for the email address & password.';
return require('views/session/create.view.php');

