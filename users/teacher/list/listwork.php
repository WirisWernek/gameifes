<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/main.css">
    <title>Gerenciar Atividades</title>
</head>

<body>
    <h1 style="text-align: center;">Gerenciar Atividades</h1>

    <nav>
                <a href="../index.php">Home</a>
                <a href="#">Gerenciar Atividades</a>
                <a href="listworklevel.php">Gerenciar Nivel Das Atividades</a>
                <a href="listworkcategory.php">Gerenciar Categoria Das Atividades</a>
                <a href="listboard.php">Gerenciar Tabuleiros</a>
                <a href="listbackgroundboard.php">Gerenciar Imagens de Fundo</a>
                <a href="listimageboard.php">Gerenciar Imagens Tabuleiro</a>
                <a href="../../../login/historicoacesso.php?opcao=Logout">Logout</a>
    </nav>
    <main>
        <br><a href='../create/registerwork.php'>Cadastrar Atividade</a>
        <?php
        require_once '../../../actions/list.php';
        listwork();
        ?>
    <main>

</body>

</html>