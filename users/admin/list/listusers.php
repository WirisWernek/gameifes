<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../../styles/main.css">
    <title>Listar Usuários</title>
</head>

<body>
    <header>
        <div class="menu">
            <nav>
                <a href="../index.php">Home</a>
                <a href="#">Gerenciar Usuários</a>
                <a href="../../../login/historicoacesso.php?opcao=Logout">Logout</a>
            </nav>
        </div>
    </header>

    <main>
        <br><a id="cad" href="../create/registeruser.php">Cadastrar Novo Usuário</a>
        <?php
        require_once '../../../actions/list.php';
        listusers();
        ?>
    </main>

</body>

</html>