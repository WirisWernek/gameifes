<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Atividade</title>
</head>
<body>
    <?php
    session_start();
        require_once '../../includes/db_connection.php';
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM atividade WHERE idatividade = $id;";
        $dados = mysqli_fetch_assoc(mysqli_query($connect, $sql));
    ?>
    <form action="../../includes/create.php" method="post">
        <input type="hidden" name="opcao" value="iniciarAtividade">
        <input type="hidden" name="idAtividade" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['id']; ?>">
        <input type="hidden" name="descricao" value="<?php echo $dados['descricacao']; ?>">

        <label for="tabuleiro">Tabuleiro</label>
        <select name="tabuleiro">
            <option value="">Selecione um valor</option>
            <?php
                require_once '../../includes/db_connection.php';
                $sql = "SELECT * FROM tabuleiro";
                $resultado = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_assoc($resultado)){   
                    echo '<option value="' . $dados['idtabuleiro'] . '">' . $dados['descricao'] . '</option>';
                }
            ?>
        </select>
        
        <input type="submit" value="Cadastrar">
    </form>    

</body>
</html>
