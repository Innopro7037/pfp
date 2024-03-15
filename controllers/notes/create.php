<?php

require 'Core/Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';

$errors = [];


require 'views/notes/create.view.php';