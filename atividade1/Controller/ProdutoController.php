<?php

session_start();
require_once "./Model/ProdutoModel.php";

class ProdutoController{
    
    public function telaCadastro(){

        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $produto = $_POST['Produto'];


        $produto = new Produto($produto);
        $produto->salvar();

        header('Location: /PB_PHP/atividade1/Produto/telaCadastro');
        exit;
    }

    public function listarProduto(){
        $produto = Produto::listar();
        echo"<pre>";
        print_r($produto);
        echo"</pre>";
        require 'View/produtoListar.php';
    }

    public function telaEditar(){
        $produto = Produto::buscar($_GET['id']);
        require 'View/ProdutoEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['produto']);
        $produto->atualizar($_GET['id']);
        header('Location: /PB_PHP/atividade1/Produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: /PB_PHP/atividade1/Produto/listar');
        exit;
    }
}