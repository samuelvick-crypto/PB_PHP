<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de livro</title>
</head>
<body>
   <a href="/PB_PHP/MVC_atividade/livro/telaCadastro">Voltar para tela de cadastro</a>
    <h2>livro</h2>
    <table border="1">
        <tr>
            <th>Livro</th>
            <th>Email</th>
            <th>Ações</th>
    </tr>
        <?php foreach ($livro as $id => $u): ?>
            <tr>
                <td><?=$u['livro']?></td>
                <td><?=$u['autor']?></td>
                <td>
<a href="/PB_PHP/MVC_atividade/livro/telaEditar?id=<?= $id ?>">
    Editar
</a>
<a href="/PB_PHP/MVC_atividade/livro/excluir?id=<?= $id ?>">
    Excluir
</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>