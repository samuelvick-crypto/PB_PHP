<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuário</title>
</head>
<body>
    <h2>Usuáro</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuario as $u): ?>
            <tr>
                <td><?=$u['nome']?></td>
                <td><?=$u['email']?></td>
                <td>Proxima aula</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>