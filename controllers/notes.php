<?php

$config = require 'config.php';

$db = new Database($config['database'], $config['database']['dbusername'], $config['database']['dbpass']);

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 5')->fetchAll();





require("./views/notes.view.php");
