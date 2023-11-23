<?php
    include_once('../connection/conexao.php');
    if(isset($_POST['id_usuario']) && isset($_POST['nome_usuario']) && isset($_POST['email_usuario']))
    {
        $id = $_POST['id_usuario'];
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $senha = $_POST['senha'];

        $sql = "UPDATE usuarios SET nome_usuario='$nome', email_usuario='$email' WHERE id_usuario=$id";
        $conn->query($sql);

        print_r($conn);
    }
    header('Location: administrador.php');
?>