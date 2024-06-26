<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/main.css">
    <title>Registrar Atividade</title>
</head>

<body>
    <form action="../../../actions/create.php" method="post">
        <input type="hidden" name="opcao" value="criarAtividade">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao">
        <label for="categoria">Categoria: </label>
        <select name="categoria">
            <option value="">Selecione um valor</option>
            <?php
            require_once '../../../includes/classes/Conexao.php';
            $conexao = Conexao::Conectar();
            $sql = "SELECT * FROM categoriaatividade";
            $resultado = $conexao->query($sql);
            while ($dados = $resultado->fetch_assoc()) {
                echo '<option value="' . $dados['idcategoriaAtividade'] . '">' . $dados['descricao'] . '</option>';
            }
            ?>
        </select>
        <label for="nivel">Nível: </label>
        <select name="nivel">
            <option value="">Selecione um valor</option>
            <?php
            require_once '../../../includes/classes/Conexao.php';
            $conexao = Conexao::Conectar();
            $sql = "SELECT * FROM nivelatividade";
            $resultado = $conexao->query($sql);
            while ($dados = $resultado->fetch_assoc()) {
                echo '<option value="' . $dados['idnivelAtividade'] . '">' . $dados['descricaoNivel'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>