<?php

    session_start();

    print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        
        include_once('../../connection/conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT nome_usuario, email_usuario, senha FROM usuarios WHERE email_usuario = '$email' and senha = '$senha'";

        $result = $conn->query($sql);

        $paginaInicialComLogin = '../../viewsLogado/paginaInicial/index.php';

        if(mysqli_num_rows($result) < 1){

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {

            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location:' . $paginaInicialComLogin);
        }

    } else {
        echo "Usuário não encontrado";
        header('Location: login.php');
    }
?>