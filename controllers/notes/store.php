<?php
require 'Core/Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

if (! Validator::string($_POST['body'], 1, 1000)){
    $errors['body'] = 'A body of no more than 1000 characters is required.';
}

$errors = [];

if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => htmlspecialchars($_POST['body']),
        'user_id' => 1
    ]);

    header('location: /pfp/notes');
    die();
}

