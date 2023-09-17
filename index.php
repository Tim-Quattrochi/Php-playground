<?php

require 'functions.php';
// require 'router.php'; //intentionally commented out to test Database class
require 'Database.php';


$config = require 'config.php';

$db = new Database($config['database'], $config['database']['dbusername'], $config['database']['dbpass']);


// :: is the scope resolution operator
$posts = $db->query('SELECT * FROM posts')->fetchAll();

dd($posts);
