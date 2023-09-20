<?php

$config = require 'config.php';

$db = new Database($config['database'], $config['database']['dbusername'], $config['database']['dbpass']);

$heading = "Note";



$note = $db->query('select * from notes where user_id = :id', ['id' => $_GET['id']])->fetch();





require("./views/note.view.php");
