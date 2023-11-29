<?php

session_start();
include_once('../connection/conexao.php');

$paginaInicialSemLogin = '../index.php';

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ' . $paginaInicialSemLogin);
} else {
    $logado = $_SESSION['nome'];
}

if (!empty($_GET['pesquisar'])) {
    $data = $_GET['pesquisar'];
    $sql = "SELECT * FROM usuarios 
    WHERE id_usuario LIKE '%$data%' or nome_usuario LIKE '%$data%' or email_usuario LIKE '%$data%' ORDER BY id_usuario DESC";
} else {
    $sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";
}

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
    <style>
        body.dark {
            background: #2a2c2b;
            color: #fafafa;

            .nav-item a {
                color: #fafafa;
            }

            th {
                border: 1px solid #393939;
            }
        }

        main {
            display: grid;
            place-items: center;
        }

        .container-titulo {
            position: relative;
        }

        .container-titulo h2 {
            font-weight: 400;
            color: var(--corRosa);
            margin-top: 0;
        }

        .container-administrador {
            display: grid;
            place-items: center;
            margin-top: 70px;
        }

        .container-pesquisaRegistros {
            position: relative;
            top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #f1f1f1;
            border-radius: 5px;
        }

        td,
        th {
            padding: 10px 50px;
            text-align: left;
        }

        th {
            border: 1px solid #f1f1f1;
            font-weight: 500;
        }
    </style>
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
                        <a class="item" href="../viewsLogado/paginaInicial/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../viewsLogado/Produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../views/Contato/">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="./upload/uploadDeProduto.php">Criar/Editar/Excluir Produto</a>
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
                        <a href="../viewsLogado/sair.php" class="button-sair">Sair</a>
                    </div>
                </div>
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
                            <li class="nav-item">
                                <a class="item" href="./uploadDeProduto.php">Criar/Editar/Excluir Produto</a>
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

        <section class="container-pesquisaRegistros">
            <form class="form input-serch" method="get">
                <button type="submit" value="pesquisa" onclick="searchData()" style="cursor: pointer;">
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Pesquisar" id="pesquisar" name="pesquisar" type="text">
                <button class="reset" type="reset" value="pesquisa">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>
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
                                        href='edit.php?id_usuario=$user_data[id_usuario]'>
                                        <img src='../img/lapis.png'/>
                                    </a>
                                    <a class='button-excluir' href='delete.php?id_usuario=$user_data[id_usuario]'>
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

    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                searchData();
            }
        });

        function searchData() {
            window.location = 'administrador.php?search=' + search.value;
        } 
    </script>

    <script src="../js/modoNoturno.js"></script>
    <script src="../js/menuResponsivo.js"></script>
</body>

</html>