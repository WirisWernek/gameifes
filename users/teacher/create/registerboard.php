<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Tabuleiro</title>
</head>
<body>
    <form action="../../../includes/create.php" method="post">
        <input type="hidden" name="opcao" value="criarTabuleiro">
        <label for="planta">Planta</label>
        <input type="text" name="planta" id="planta">
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>