<!DOCTYPE html>
<html lang="pt-BR">
    <header>
        <meta charset="UFT-8">
        <title>Formulário Cadastro</title>
</head>
<boby>
    <h2>Editar Produto<h2>
    <a href =" /PB_PHP/atividade1/Produto/listar">Ir para a tela de Listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>"> 
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="Produto" value="<?= htmlspecialchars($produto['Produto'])?>" require>
        <button type="submit"> Editar</button>
    </form>
</boby>
</html>