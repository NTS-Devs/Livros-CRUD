<?php

// As Models servem para passar dados das classes de Controller para as DAO's e vice-versa
// Models validam os dados da View e controla o acesso aos metodos do DAO

class LivroModel
{

  // Propriedades da classe seguindo os campos da tabela
  public $id, $titulo, $autor, $data_publicacao;

  // Array que armazena a listagem do livros
  public $rows;

  // Metodo que salva os dados usando os metodos da DAO
  public function save()
  {
    include "DAO/LivroDAO.php"; // Chamando o arquivo da DAO

    // Instancia o objeto para conexao ao BD
    $dao = new LivroDAO();

    if (empty($this->id)) {
      $dao->insert($this);
    } else {
      $dao->update($this);
    }

  }

  public function getAllRows()
  {
    include "DAO/LivroDAO.php";

    $dao = new LivroDAO();

    // Armazena os dados do MySQL
    $this->rows = $dao->select();
  }

  public function getById(int $id)
  {
    include "DAO/LivroDAO.php";

    $dao = new LivroDAO();

    $obj = $dao->selectById($id);

    return ($obj) ? $obj : new LivroModel();

  }

  public function delete(int $id){
    include "DAO/LivroDAO.php";

    $dao = new LivroDAO();

    $dao->delete($id);
  }

}