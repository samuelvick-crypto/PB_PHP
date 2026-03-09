<?php

class Livro{
    private $nome_do_livro;
    private $autor;

    public function __construct($nome_do_livro, $autor){
        $this->nome_do_livro = $nome_do_livro;
        $this->autor = $autor;
    }

    public function salvar(){
        if(!isset($_SESSION['livro'])){
            $_SESSION['livro'] = [];
        }

        $_SESSION['livro'][]= [
            'nome_do_livro' => $this->nome_do_livro,
            'autor' => $this->autor
        ];
    }

    public static function listar(){
        return $_SESSION['livro'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['livro'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['livro'][$id])){
            $_SESSION['livro'][] = [
            'nome_do_livro' => $this->nome_do_livro,
            'autor' => $this->$autor
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['livro'][$id])){
            unset($_SESSION['livro'][$id]);
        }
    }
}