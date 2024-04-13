<?php

class LivroDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=BD_LWEB2_CRUD";

        $conexao = new PDO($dsn, 'root', '');
    }
    public function insert()
    {

    }

    public function update()
    {

    }

    public function select()
    {

    }
}