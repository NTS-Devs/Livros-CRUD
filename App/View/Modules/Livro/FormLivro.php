<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Livros</title>
</head>
<body>
  <fieldset>
    <legend>Cadastro de Livros</legend>

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