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

    public function update(LivroModel $model)
    {
        $sql = "UPDATE Livros SET titulo=?, autor=?, data_publicacao=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->titulo);
        $stmt->bindValue(2, $model->autor);
        $stmt->bindValue(3, $model->data_publicacao);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Livros";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/LivroModel.php';

        $sql = "SELECT * FROM Livros WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("LivroModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Livros WHERE id= ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}