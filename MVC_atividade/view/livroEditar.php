<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário cadastro</title>
</head>
<body>
    <h2>Editar usuário<h2>
    <a href =" /PB_PHP/MVC_atividade/livro/listar">Ir para a tela de Listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome_do_livro" value="<?= htmlspecialchars($livro['nome_do_livro'])?>" require>
        <input type="text" name="autor" value="<?= htmlspecialchars($livro['autor'])?>" require>
        <button type="submit"> Editar</button>
</body>
</html>