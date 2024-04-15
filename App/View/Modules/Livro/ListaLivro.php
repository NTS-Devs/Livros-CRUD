<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="<?= BASE_URL . "/View/Modules/Livro/CSS/styles.css" ?>">
  <link rel="stylesheet" href="<?= BASE_URL . "/View/Modules/Livro/CSS/styles-mobile.css" ?>">
  <link rel="shortcut icon" href="<?= BASE_URL . "/View/Modules/Livro/Assets/favicon.ico" ?>" type="image/x-icon">
  <title>Cadastro de Livros</title>
</head>

<body class="grid-container">

  <div class="sidebar grid-item">
    <a href="<?= BASE_URL ?>">
      <span class="material-symbols-outlined">
        menu_book
      </span>
      <span>Livros</span>
    </a>

    <a href="<?= BASE_URL . "/livros/form" ?>">
      <span class="material-symbols-outlined">
        add_circle
      </span>
      <span>Novo Livro</span>
    </a>
  </div>

  <div class="main-container grid-item">
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
  </div>
</body>

</html>