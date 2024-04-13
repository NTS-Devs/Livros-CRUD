<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
  <title>Cadastro de Livros</title>

  <style>
    body {
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    fieldset {
      width: 85%;
    }
  </style>
</head>

<body>
  <fieldset>
    <h2>Cadastro de Livros</h2>

    <form method="post" action="<?php echo BASE_URL ?>/livros/form/save">
      <label for="titulo">Titulo: </label>
      <input value="<?= $model->titulo ?>" type="text" name="titulo" id="titulo" required>


      <label for="autor">Autor: </label>
      <input value="<?= $model->autor ?>" type="text" name="autor" id="autor" required>

      <label for="data">Data: </label>
      <input value="<?= $model->data_publicacao ?>" type="date" name="data" id="data" required>

      <button type="submit">Salvar</button>
    </form>
  </fieldset>
</body>

</html>