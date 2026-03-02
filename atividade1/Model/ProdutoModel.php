<?php

class Produto{
    private $produto;

    public function __construct($produto){
        $this->produto = $produto;
    }


    public function salvar(){
        if(!isset($_SESSION['Produto'])){
            $_SESSION['Produto'] = [];
        }

        $_SESSION['Produto'][] = [
            'Produto' => $this->produto
        ];
    }
    public static function listar(){
        return $_SESSION['Produto'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['Produto'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['Produto'][$id])){
            $_SESSION['Produto'][$id] = [
            'Produto' => $this->Produto
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['Produto'][$id])){
            unset($_SESSION['Produto'][$id]);
        }
    }
}