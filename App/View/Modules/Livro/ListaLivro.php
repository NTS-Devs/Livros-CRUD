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
      display: flex;
      align-items: center;
      justify-content: center;
    }

    table {
      width: 90%;
    }

    th,
    td {
      text-align: center;
      max-width: 200px;
    }

    .grid {
      margin: 10px;
    }

    button {
      border: 0;
      padding: 10px;
    }

    .warning {
      background-color: #E12E1E;
    }
  </style>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Data de Publicação</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($model->rows as $livro) { ?>
        <tr>
          <td><?= $livro->id ?></td>
          <td><?= $livro->titulo ?></td>

          <td><?= $livro->autor ?></td>
          <td><?= $livro->data_publicacao ?></td>
          <td>
            <div class="grid">
              <div>
                <a href="<?= BASE_URL ?>/livros/form?id=<?= $livro->id ?>">
                  <button>Editar</button>
                </a>
              </div>

              <div>
                <a href="<?= BASE_URL ?>/livros/delete?id=<?= $livro->id ?>">
                  <button class="warning">Deletar</button>
                </a>
              </div>

            </div>
          </td>
        </tr>
      <?php } ?>

      <?php if (count($model->rows) == 0) { ?>
        <tr>
          <td colspan="5">Nenhum registro encontrado</td>
        </tr>
      <?php } ?>

    </tbody>
  </table>
</body>

</html>