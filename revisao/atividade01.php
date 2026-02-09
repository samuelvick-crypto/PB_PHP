<?php
    session_start();

    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $datanascimento;

        public function __construct($nome,$sobrenome,$nota,$datanascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->datanascimento = $datanascimento;
        }

        public function salvar(){
            if(!isset($_SESSION['usuarios'])){
                $_SESSION['usuarios'] = [];
            }
            
            $_SESSION['usuarios'][] = [
                'nome'=> $this->nome,
                'sobrenome'=> $this->sobrenome,
                'nota'=> $this->nota,
                'datanascimento'=> $this->datanascimento
            ];
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $datanascimento = $_POST['datanascimento'];

        $usuario = new Usuario($nome,$sobrenome,$nota,$datanascimento);
        $usuario->salvar();
    }

    if(isset($_GET['reset'])){
        session_destroy();
    }

    //exibir session
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulários</title>
</head>
<body>
    <h2 style="color:darkblue; font-family:Arial"> Cadastro de Aluno</h2>
    <form action="" method="POST" style="background:#f2f2f2; padding: 15px; border-radius 8px; width: 300px;">
        Nome: <br>
        <input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
        Sobrenome: <br>
        <input type="sobrenome" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
        Nota: <br>
        <input type="nota" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
        Data de nascimento: <br>
        <input type="date" name="datanascimento" min="1900-01-01" max="2026-02-02" value="" style="width:100%; margin-bottom:10px"><br>
        <button type="submit" style="background:green; color:white; padding:5px 10px;">Cadastrar</button>
        <button type="reset" style="background:red; color:white; padding:5px 10px;">Limpar</button>
    </form>
    <?php if(isset($_SESSION['usuarios'])): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nota</th>
                <th>Data de nascimento</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['usuarios'] as $usuario):?>
            <tr>
                <td><?= $usuario['nome']?></td>
                <td><?= $usuario['sobrenome']?></td>
                <td><?= $usuario['nota']?></td>
                <td><?= $usuario['datanascimento']?></td>
            </tr>
           <?php endforeach ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>