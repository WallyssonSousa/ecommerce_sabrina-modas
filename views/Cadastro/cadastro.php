<?php
include_once('../../connection/conexao.php');
if (isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conn, "INSERT INTO usuarios(nome_usuario, email_usuario, senha) 
        VALUES ('$nome' , '$email', '$senha') ");

    $login = '../Login/login.php';
    header('Location: ' . $login);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Cadastro</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./cadastro.css">
    <style>
        body.dark {
            .input-box::placeholder {
                color: #6a6a6a;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="../../index.php" class="button-voltar">Volta</a>
        </div>
        <div>
            <label class="switch">
                <input type="checkbox" checked="checked" id="chk" />
                <span class="slider"></span>
            </label>
        </div>
    </header>

    <main class="main">

        <div class="container-form-cadastro">
            <form action="" method="POST" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../../img/logo.png" alt="logo">
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="email" name="email" placeholder="E-mail" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="password" name="senha" placeholder="Senha" id="senha" required>
                    <span class="underline"></span>
                </div>

                <div class="container-button-form">
                    <div class="container-button-form--header">
                        <input type="submit" name="submit" value="Cadastrar" class="button-cadastro">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/mostrarSenha.js"></script>
</body>

</html>