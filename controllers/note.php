<?php

$config = require 'config.php';

$db = new Database($config['database'], $config['database']['dbusername'], $config['database']['dbpass']);

$heading = "Note";
$currentUser = 3;



$note = $db->query('select * from notes where id = :id', [

    'id' => $_GET['id']

])->findOrFail();

authorize($note['user_id'] === $currentUser);





require("./views/note.view.php");
