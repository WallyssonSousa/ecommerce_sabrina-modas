<?php
    

    if(!empty($_GET['id_usuario'])){

        include_once('../connection/conexao.php');

        $id = $_GET['id_usuario'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id";

        $result = $conn->query($sqlSelect);

        if($result -> num_rows > 0){
            while ($user_data = $result->fetch_assoc()) {
            $nome = $user_data['nome_usuario'];
            $email = $user_data['email_usuario'];
            $senha = $user_data['senha'];
            }
        } else {

        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Editar</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./edit.css">
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="administrador.php" class="button-voltar">Volta</a>
        </div>
    </header>

    <main class="main">

        <div class="container-form-cadastro">
            <form action="salvarEdit.php" method="POST" class="formulario">

                <div class="container-logo-form">
                    <img class="logo-form" src="../img/logo.png" alt="logo">
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="email" name="email" placeholder="E-mail" value="<?php echo $email ?>" required>
                    <span class="underline"></span>
                </div>

                <div class="input-wrapper">
                    <input class="input-box" type="password" name="senha" placeholder="Senha" value="<?php echo $senha ?>" id="senha" required>
                    <span class="underline"></span>
                </div>
                

                <input type="hidden" name="id" value=<?php echo $id?>>
                <input type="submit" name="update" id="update" class="button-cadastro">

            </form>
        </div>
    </main> 

    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/mostrarSenha.js"></script>
</body>

</html>