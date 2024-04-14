<?php 

class LivroController {

  public static function index() {
    include 'Model/LivroModel.php';

    $model = new LivroModel();
    $model->getAllRows();

    include 'View/Modules/Livro/ListaLivro.php';
  }
  
  public static function form() {

    include 'Model/LivroModel.php';
    
    $model = new LivroModel();

    include 'View/Modules/Livro/FormLivro.php';
  }

  public static function save() {
    include 'Model/LivroModel.php';

    $model = new LivroModel();

    $model->titulo = $_POST['titulo'];
    $model->autor = $_POST['autor'];
    $model->data_publicacao = $_POST['data'];

    $model->save();

    header("Location: /Site-Lweb/App/livros");
  }
}