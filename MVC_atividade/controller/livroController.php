<?php

session_start();
require_once "./Model/LivroModel.php";

class LivroController{

    public function telaCadastro(){

        require "View/telaCadastro.php";
    }

    public function cadastrar(){
        $nome_do_livro = $_POST['livro'];
        $autor = $_POST['autor'];

        $livro = new Livro($nome_do_livro, $autor);
        $livro->salvar();

        header('Location: /PB_PHP/MVC_atividade/livro/telaCadastro');
        exit;
    }

    public function listarLivro(){
        $livro = Livro::listar();
        echo"<pre>";
        print_r($livro);
        echo"</pre>";
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro ($_POST['nome_do_livro'], $_POST['autor']);
        $livro->atualizar($_GET['id']);
        header('Location: /PB_PHP/MVC_atividade/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PB_PHP/MVC_atividade/livro/listar');
        exit;
    }
}