<?php

class LivroDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=BD_LWEB2_CRUD";

        $this->conexao = new PDO($dsn, 'root', '');
    }
    public function insert(LivroModel $livro)
    {   
        $sql = "INSERT INTO livros (titulo, autor, data_publicacao) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $livro->titulo);
        $stmt->bindValue(2, $livro->autor);
        $stmt->bindValue(3, $livro->data_publicacao);

        $stmt->execute();
    }

    public function update()
    {

    }

    public function select()
    {

    }
}