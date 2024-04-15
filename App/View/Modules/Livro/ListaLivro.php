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

    table {
      width: 85%;
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
          <td><?= $livro->ID ?></td>
          <td><?= $livro->titulo ?></td>

          <td><?= $livro->autor ?></td>
          <td><?= $livro->data_publicacao ?></td>
          <td>
            
            <a href="/Site-Lweb/App/livros/form?id=<?= $livro->ID ?>">
              <button>Editar</button>
            </a>
            <a href="/Site-Lweb/App/livros/delete?id=<?= $livro->ID ?>">
              <button>Deletar</button>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>