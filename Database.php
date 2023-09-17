<?php

class Database
{
    public $connection; //instance property

    public function __construct($config, $username, $password)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        //dsn stands for Data Source Name


        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query)
    {

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}