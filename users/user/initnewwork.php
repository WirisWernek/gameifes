<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/main.css">
    <link rel="stylesheet" href="./style.css">
    <title>Nova Atividade</title>
</head>

<body>
    <h1 style="text-align: center;">Atividades</h1>
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
    

    $novaatividade = new AtividadeAluno();
    $resultado = $novaatividade->NovaAtividade();
    $i = 0;
    while ($dados = $resultado->fetch_assoc()) :
    ?>
        <div class="content">
            <table class="TabelaU">    
                <thead> 
                    <tr> 
                        <th>Atividade:</th>
                        <td><?php echo ($i + 1); ?></td>
                    </tr>
                    <tr>     
                        <th>Categoria:</th>
                        <td><?php echo $dados['Categoria']; ?></td>
                    </tr>     
                    <tr> 
                        <th>Dificuldade:</th>
                        <td><?php echo $dados['Nivel']; ?></td>
                    </tr>
                    <tr>      
                        <th>Descrição:</th>
                        <td><?php echo $dados['Descricao']; ?></td>
                    </tr>
                    <tr>     
                        <th><a href="./accomplishwork.php?id=<?php echo $dados['IdAtividade']; ?>" >Iniciar</a><th>
                    </tr> 
               </thead>
            </table>
        </div>
    <?php
        $i++;
    endwhile;
    ?>
</body>

</html>