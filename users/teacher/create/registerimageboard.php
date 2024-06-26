<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/main.css">
    <title>Registrar Imagem de Tabuleiro</title>
</head>

<body>
    <form action="../../../actions/create.php" method="post">
        <input type="hidden" name="opcao" value="criarImagemTabuleiro">
        <label for="url">URL: </label>
        <select name="url" id="url">
            <option>Selecione uma imagem</option>
            <?php
            require_once '../../../includes/classes/Conexao.php';
            $conexao = Conexao::Conectar();
            $sql = "SELECT * FROM imagenstabuleiro";
            $resultado = $conexao->query($sql);
            while ($dados = $resultado->fetch_assoc()) {
                echo "<option value='" . $dados['idimagenstabuleiro'] . "'>" . $dados['urlImagem'] . "</option>";
            }
            ?>
        </select>
        <label for="tabuleiro">Tabuleiro : </label>
        <select name="tabuleiro" id="tabuleiro">
            <option>Selecione um tabuleiro</option>
            <?php
            require_once '../../../includes/classes/Conexao.php';
            $conexao = Conexao::Conectar();
            $sql = "SELECT * FROM tabuleiro";
            $resultado = $conexao->query($sql);
            while ($dados = $resultado->fetch_assoc()) {
                echo "<option value='" . $dados['idtabuleiro'] . "'>" . $dados['descricao'] . "</option>";
            }
            ?>
        </select>
        <label for="posicao">Posição: </label>
        <input type="number" name="posicao" id="posicao">

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>