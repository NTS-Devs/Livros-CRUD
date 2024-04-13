<?php

include "Controller/LivroController.php";

// Pega os parametros passados pela URL
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Estrutura de decisao para chamada das rotas
switch ($url) {
    case "/Site-Lweb/App/":
        echo "Pagina inicial";
        break;

    case "/Site-Lweb/App/livros":
        echo "Lista Livros";
        break;

    default:
        echo "Erro 404 - Rota não encontrada";
        break;
}