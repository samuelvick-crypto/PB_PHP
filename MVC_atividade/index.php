<?php

require_once "Controller/LivroController.php";

$livroController = new LivroController();
$rout = $_GET["route"] ?? '';

switch ($rout) {

    case 'livro/listar':
        $livroController->listarLivro();
        break;

    case 'livro/telaCadastro':
        $livroController->telaCadastro();
        break;

    case 'livro/telaEditar':
        $livroController->telaEditar();
        break;

    case 'livro/salvar':
        $livroController->cadastrar();
        break;

    case 'livro/atualizar':
        $livroController->atualizar();
        break;

    case 'livro/excluir':
        $livroController->excluir();
        break;

    default:
        echo "Página não encontrada";
        break;
}