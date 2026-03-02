<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuário</title>
</head>
<body>
    <a href="/PB_PHP/MVCExemplos/usuario/telaCadastro">Voltar para tela de cadastro</a>
    <h2>Usuário</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuario as $id => $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td>
<a href="/PB_PHP/MVCExemplos/usuario/telaEditar?id=<?= $id ?>">
    Editar
</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>