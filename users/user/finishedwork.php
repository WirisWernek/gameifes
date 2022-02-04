<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="./style.css">
    <title>Atividades Finalizadas</title>
</head>

<body>
    <h1 style="text-align: center;">Atividades Finalizadas</h1>
    <nav>
            <a href="./index.php">Home</a>
            <a href="./initnewwork.php">Nova Atividade</a>
            <a href="./finishedwork.php">Atividades Finalizadas</a>
            <a href="../../login/historicoacesso.php?opcao=Logout">Logout</a>
    </nav>
    <?php
    session_start();
    require_once '../../includes/classes/Atividade_Aluno.php';
    require_once '../../includes/classes/Conexao.php';
    $id = $_SESSION['id'];
    $atividades = new AtividadeAluno();
    $resultado = $atividades->AtividadesFinalizadas($id);
    while ($dados = $resultado->fetch_assoc()) :
        $data_inicio = new DateTime($dados['Inicio']);
        $data_fim = new DateTime($dados['Fim']);
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
                            <th>Finalizado em:</th>
                            <td><?php echo $data_fim->format("d/m/Y H:i") ?></td>
                     </tr>
                </thead>
            </table>
        </div>        
    <?php
    endwhile;
    ?>
    <hr>
</body>

</html>