<?php

include "Config.php";
include "Controller/LivroController.php";

// Pega os parametros passados pela URL
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Estrutura de decisao para chamada das rotas
switch ($url) {
    case "/Site-Lweb/App/":
        LivroController::index();
        break;

    case "/Site-Lweb/App/livros":
        LivroController::index();
        break;

    case "/Site-Lweb/App/livros/form":
        LivroController::form();
        break;

    case "/Site-Lweb/App/livros/form/save":
        LivroController::save();
        break;

    case "/Site-Lweb/App/livros/delete":
        echo "Deleta Livros";
            break; 
    default:
        echo "Erro 404 - Rota não encontrada";
        break;
}