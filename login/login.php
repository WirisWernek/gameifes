<?php
session_start();
require_once '../includes/classes/Conexao.php';
if (isset($_POST['btn-login'])) {
    $conexao = Conexao::Conectar();
    $login = $conexao->escape_string($_POST['login']);
    $senha = $conexao->escape_string($_POST['senha']);
    $sql = "SELECT * FROM usuario WHERE `login` = '$login'";
    $resultado = $conexao->query($sql);
    if ($resultado) {
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            if (password_verify($senha, $dados['senha'])) {
                switch ($dados['perfilUsuarioID']) {
                    case '1':
                        $_SESSION['id'] = $dados['idusuario'];
                        $_SESSION['nome'] = $dados['nomeCompletoUsuario'];
                        $_SESSION['tipo'] = $dados['perfilUsuarioID'];
                        $_SESSION['mensagem'] = "Login efetuado com sucesso!";
                        header('Location: ./historicoacesso.php?opcao=Login');
                        break;
                    case '2':
                        $_SESSION['id'] = $dados['idusuario'];
                        $_SESSION['nome'] = $dados['nomeCompletoUsuario'];
                        $_SESSION['tipo'] = $dados['perfilUsuarioID'];
                        $_SESSION['mensagem'] = "Login efetuado com sucesso!";
                        header('Location: ./historicoacesso.php?opcao=Login');
                        break;
                    case '3':
                        $_SESSION['id'] = $dados['idusuario'];
                        $_SESSION['nome'] = $dados['nomeCompletoUsuario'];
                        $_SESSION['tipo'] = $dados['perfilUsuarioID'];
                        $_SESSION['mensagem'] = "Login efetuado com sucesso!";
                        header('Location: ./historicoacesso.php?opcao=Login');
                        break;
                    default:
                        $_SESSION['mensagem'] = "Falha na leitura dos dados!";
                        header('Location: ../index.php');
                        break;
                }
            } else {
                $_SESSION['mensagem'] = "Senha incorretas!";
                header('Location: ../index.php');
            }
        } else {
            $_SESSION['mensagem'] = "Senha ou login incorretos!";
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['mensagem'] = "Nenhuma informação foi recebida!";
        header('Location: ../index.php');
    }
}
