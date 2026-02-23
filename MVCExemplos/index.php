<?php

require_once "Controller/UsuarioController.php";

$usuarioController = new UsuarioController();
$rout = $_GET["route"] ?? '';

switch ($rout) {
    case 'usuario/telaCadastro':
        $usuarioController->telaCadastro();
        break;

    case "usuario/salvar":
        $usuarioController->cadastrar();
        break;

    case 'usuario/listar':
        $usuarioController->listarUsuario();
        break;  

    default:
        echo "Página não encontada";
        break;
}