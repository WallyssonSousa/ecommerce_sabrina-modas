<?php

session_start();

$paginaInicialSemLogin = '../index.php';

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ' . $paginaInicialSemLogin);
} else {
    $logado = $_SESSION['nome'];
}

include_once('../connection/conexao.php');

$sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="administrador.css">
    <title>Sabrina Modas | Administrador</title>
</head>

<body>

    <header class="header">

        <div class="line-header">

            <div class="mobile-menu-icon">
                <button class="menu-button" onclick="menuShow()"><img class="icon-mobile"
                        src="../img/menu-icon.svg" /></button>
            </div>

            <a href="#">
                <img src="../img/logo.png" alt="logo" class="logo-header">
            </a>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="item" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../../views/Produtos/">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../../views/Contato/">Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="perfil">
                <div class="container-login-cadastro">
                    <h4 class="nome-conta">Olá,</h4>
                    <div class="logado-sair">
                        <h4 class="nome-logado">
                            <?php echo $logado ?>
                        </h4>
                        <a href="../sair.php" class="button-sair">Sair</a>
                    </div>
                </div>
            </div>

            <div>
                <label class="switch">
                    <input type="checkbox" checked="checked" id="chk" />
                    <span class="slider"></span>
                </label>
            </div>

        </div>

        <!--Menu Mobile-->

        <div class="line-bottom">

            <div class="menu-mobile">

                <div class="menu-mobile-header">

                    <div class="perfil-mobile">
                        <div class="container-login-cadastro">
                            <h4 class="nome-conta">Olá,</h4>
                            <div class="logado-sair">
                                <h4 class="nome-logado">
                                    <?php echo $logado ?>
                                </h4>
                                <a href="../viewsLogado/sair.php" class="button-sair">Sair</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="menu-mobile-bottom">
                    <nav class="nav-mobile">
                        <ul class="nav-list-mobile">
                            <li class="nav-item">
                                <a class="item" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../views/Produtos/">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../views/Contato/">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>


    <main>

        <section class="container-titulo">
            <h2>Tela de Administrador</h2>
        </section>

        <section class="container-administrador">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($result->num_rows > 0) {

                        while ($user_data = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $user_data['id_usuario'] . "</td>";
                            echo "<td>" . $user_data['nome_usuario'] . "</td>";
                            echo "<td>" . $user_data['email_usuario'] . "</td>";
                            echo "<td>
                                    <a class='button-editar'
                                        href='edit.php?id=$user_data[id_usuario]'>
                                        <img src='../img/lapis.png'/>
                                    </a>
                                    <a class='button-excluir' href='delete.php?id=$user_data[id_usuario]'>
                                        <img src='../img/lixeira.png' />
                                    </a>
                                </td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </section>

    </main>


    <script src="../js/menuResponsivo.js"></script>
</body>

</html>