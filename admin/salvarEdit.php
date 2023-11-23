<?php
    include_once('../connection/conexao.php');
   if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "UPDATE usuarios SET nome_usuario='$nome', email_usuario='$email' WHERE id_usuario=$id";
        
        $result = $conn->query($sql);
        print_r($nome);
    } 

    header('Location: administrador.php');
?>