<?php

require_once "Controller/ProdutoController.php";

$produtoController = new ProdutoController();
$rout = $_GET["route"] ?? '';

switch ($rout) {

    case 'Produto/listar':
        $produtoController->listarProduto();
        break;

    case 'Produto/telaCadastro':
        $produtoController->telaCadastro();
        break;

    case 'Produto/telaEditar':
        $produtoController->telaEditar();
        break;

    case "Produto/salvar":
        $produtoController->cadastrar();
        break;

    case 'Produto/atualizar':
        $produtoController->atualizar();
        break;

    case 'Produto/excluir':
        $produtoController->excluir();
        break;
    
    default:
        echo "Página não encontada";
        break;
}