<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db_username = $_ENV['DB_USERNAME'];
$db_password = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_NAME'];
$db_port = $_ENV['DB_PORT'];
$db_host = $_ENV['DB_HOST'];


return [
    'database' => [
        'host' => $db_host,
        'port' => $db_port,
        'dbusername' => $db_username,
        'dbname' => $db_name,
        'dbpass' => $db_password,
        'charset' => 'utf8mb4'
    ],
];
