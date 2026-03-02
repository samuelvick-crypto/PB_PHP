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

    case 'usuario/telaEditar':
        $usuarioController->telaEditar();
        break;

    case 'usuario/atualizar':
        $usuarioController->atualizar();
        break;
    default:
        echo "Página não encontada";
        break;
}