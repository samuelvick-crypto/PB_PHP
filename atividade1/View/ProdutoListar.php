<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuário</title>
</head>
<body>
    <a href="/PB_PHP/atividade1/Produto/telaCadastro">Voltar para tela de cadastro</a>
    <h2>Produto</h2>
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($produto as $id => $u): ?>
            <tr>
                <td><?=$u['Produto']?></td>
                <td>
<a href="/PB_PHP/atividade1/Produto/telaEditar?id=<?= $id ?>">
    Editar
</a>
<a href="/PB_PHP/atividade1/Produto/excluir?id=<?= $id ?>">
    Excluir
</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>