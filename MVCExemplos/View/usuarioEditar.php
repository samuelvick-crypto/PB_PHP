<!DOCTYPE html>
<html lang="pt-BR">
    <header>
        <meta charset="UFT-8">
        <title>Formulário Cadastro</title>
</head>
<boby>
    <h2>Editar usuário<h2>
    <a href =" /PB_PHP/MVCExemplos/usuario/listar">Ir para a tela de Listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>"> 
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome'])?>" require>
        <input type="text" name="email" value="<?= htmlspecialchars($usuario['email'])?>" require>
        <button type="submit"> Editar</button>
    </form>
</boby>
</html>