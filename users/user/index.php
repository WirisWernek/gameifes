<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/main.css">
    <link rel="stylesheet" href="./style.css">
    <title>Atividades</title>
</head>

<body>
    <main>
    <div class="titulo">
            <h1 style="text-align: center;">Atividades Em Andamento</h1>
        </div>
        <nav>
            <a href="./index.php">Home</a>
            <a href="./initnewwork.php">Nova Atividade</a>
            <a href="./finishedwork.php">Atividades Finalizadas</a>
            <a href="../../login/historicoacesso.php?opcao=Logout">Logout</a>
        </nav>    
        <?php
        require_once '../../includes/classes/Conexao.php';
        require_once '../../includes/classes/Atividade_Aluno.php';

        session_start();
        $atividades = new AtividadeAluno();
        $resultado = $atividades->AtividadesEmAndamento($_SESSION['id']);

        while ($dados = $resultado->fetch_assoc()) :
            $data_inicio = new DateTime($dados['Inicio']);
        ?>
            <hr>
            <div class="content">
                <table class="TabelaU">    
                    <thead> 
                        <tr>
                            <th>Atividade:</th>
                            <td><?php echo $dados['Descricao']; ?></td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td><?php echo $dados['Status']; ?></td>
                        </tr>
                        <tr>
                            <th>Tabuleiro:</th>
                            <td> <?php echo $dados['Tabuleiro']; ?></td>
                        </tr>                       
                        <tr>
                            <th>Iniciado em:</th>
                            <td><?php echo $data_inicio->format("d/m/Y H:i") ?></td>
                        </tr>
                        <tr>
                            <th><a href="?id=<?php echo $dados['ID']; ?>" class="card-link">Continuar</a></th>
                            <td><a href="./endwork.php?id=<?php echo $dados['ID']; ?>" class="card-link">Finalizar</a></td>
                     </tr>
                    </thead>
                </table>
            </div>
        <?php
        endwhile;
        ?>
        <hr>
    </main>
</body>

</html>