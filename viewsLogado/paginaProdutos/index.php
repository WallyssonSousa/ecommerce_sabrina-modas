<?php

include('../../connection/conexao.php');

session_start();

$paginaInicialSemLogin = '../../index.php';

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ' . $paginaInicialSemLogin);
}

$logado = $_SESSION['nome'];

if (isset($_POST['add_carrinho'])) {
    $produto_nome = $_POST['produto_nome'];
    $produto_preco = $_POST['produto_preco'];
    $produto_imagem = $_POST['produto_imagem'];
    $produto_quantidade = 1;

    $select_carrinho = "SELECT * FROM carrinho WHERE nome_produto = '$produto_nome'";

    $result = $conn->query($select_carrinho);

    if (mysqli_num_rows($result) > 0) {

    } else {
        $insert_produto = mysqli_query($conn, "INSERT INTO carrinho (imagem_produto, nome_produto, preco_produto,quantidade) 
        VALUES('$produto_imagem', '$produto_nome', '$produto_preco', '$produto_quantidade')");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Produtos</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./produto.css">
    <style>
        body.dark {
            .footer-hr {
                border-color: #393939;
            }

            .descricao-card{
                color: #f1f1f1;
            }
        }

        @media (max-width: 860px) {

            .card-pesquisa {
                text-align: start;
                width: 170px;
                height: 250px;
                padding: 5px;
                margin: 5px 6px;
                border: 1px solid #f1f1f1;
                overflow-x: hidden;
                overflow-y: hidden;
                position: relative;
                top: 25px;
            }

            .container-sobre {
                display: flex;
                flex-direction: column;
                margin: 100px;
            }

            .titulo-right {
                font-size: 20px;
                position: relative;
                bottom: 5px;
            }

            .text-right {
                top: 0;
            }

            .img-sobre {
                width: 90%;
                height: 300px;
            }

            .container-right-sobre {
                margin: 45px 30px;
            }

            .container-img-sobre {
                display: flex;
                justify-content: center;
            }

            .card button.add-carrinho {
                display: none;
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                background-color: var(--corRosa);
                color: #fff;
                font-weight: 400;
                border: none;
                padding: 8px 10px;
                border-radius: 6px;
                text-align: center;
                text-decoration: none;
                font-size: 12px;
                cursor: pointer;
            }
        }

        @media (max-width: 650px) {

            .card-pesquisa {
                text-align: start;
                width: 140px;
                height: 225px;
                padding: 5px;
                margin: 5px 6px;
                border: 1px solid #f1f1f1;
                overflow-x: hidden;
                overflow-y: hidden;
                position: relative;
                top: 25px;
            }

            .img-card-pesquisa {
                width: 70%;
                height: 170px;
                object-fit: cover;
                position: relative;
            }

            .preco-card-pesquisa {
                color: #FFA7DE;
                font-weight: 600;
                margin: 5px 0;
                font-size: 14px;
            }

            .descricao-card-pesquisa {
                font-size: 12px;
                font-weight: 600;
            }

            .container-sobre {
                margin: 60px;
                padding: 35px;
            }

            .container-right-sobre {
                margin: 40px 0;
            }

            .img-sobre {
                width: 100%;
                height: 230px;
            }

            .card button.add-carrinho {
                display: none;
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                background-color: var(--corRosa);
                color: #fff;
                font-weight: 400;
                border: none;
                padding: 8px 10px;
                border-radius: 6px;
                text-align: center;
                text-decoration: none;
                font-size: 12px;
                cursor: pointer;
            }

            .card:hover button.add-carrinho {
                display: block;
            }
        }

        @media (max-width: 530px) {
            .container-sobre {
                margin: 40px;
                padding: 40px;
            }

            .preco-card {
                font-size: 12px;
            }

            .card-pesquisa {
                text-align: start;
                width: 130px;
                height: 220px;
                padding: 5px;
                margin: 5px 6px;
                border: 1px solid #f1f1f1;
                overflow-x: hidden;
                overflow-y: hidden;
                position: relative;
                top: 25px;
            }

            .img-card-pesquisa {
                width: 75%;
                height: 160px;
                object-fit: cover;
                position: relative;
            }
        }

        @media (max-width: 500px) {
            .container-sobre {
                margin: 40px;
                padding: 40px;
            }

            .preco-card {
                font-size: 12px;
            }

            .descricao-card-pesquisa {
                font-size: 10px;
                font-weight: 600;
            }

            .preco-card-pesquisa {
                color: #FFA7DE;
                font-weight: 600;
                margin: 5px 0;
                font-size: 12px;
            }

            .card-pesquisa {
                text-align: start;
                width: 115px;
                height: 195px;
                padding: 5px;
                margin: 5px 6px;
                border: 1px solid #f1f1f1;
                overflow-x: hidden;
                overflow-y: hidden;
                position: relative;
                top: 25px;
            }

            .img-card-pesquisa {
                width: 80%;
                height: 130px;
                object-fit: cover;
                position: relative;
            }

            .preco-card-pesquisa {
                color: #FFA7DE;
                font-weight: 600;
                margin: 5px 0;
                font-size: 11px;
            }

        }

        @media (max-width: 450px) {
            .container-card-busca {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                place-items: center;
                position: relative;
                width: 100%;
                margin-top: 10px
            }
        }
    </style>
</head>

<body>
    <header class="header">

        <div class="line-header">

            <div class="mobile-menu-icon">
                <button class="menu-button" onclick="menuShow()"><img class="icon-mobile"
                        src="../../img/menu-icon.svg" /></button>
            </div>

            <a href="#">
                <img src="../../img/logo.png" alt="logo" class="logo-header">
            </a>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="item" href="../paginaInicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../paginaContatos">Contato</a>
                    </li>
                    <li class="nav-item">
                        <?php

                        $email_admin = "SabrinaModasAdmin@gmail.com";
                        $senha_admin = password_hash("SabrinaModasAdmin2023%", PASSWORD_DEFAULT);

                        if (isset($_SESSION['email'])) {
                            if ($_SESSION['email'] == $email_admin && password_verify($_SESSION['senha'], $senha_admin)) {
                                echo "<a class='item' href='../../admin/administrador.php'>Admin</a>";
                            } else {

                            }
                        } else {

                        }
                        ?>
                    </li>
                </ul>
            </nav>

            <form class="form input-serch" method="get">
                <button type="submit" value="buscar" style="cursor: pointer;">
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Pesquisar" name="busca" type="text">
                <button class="reset" type="reset" value="Buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>

            <?php
            $select_rows = mysqli_query($conn, "SELECT * FROM carrinho") or die('query failed');
            $row_count = mysqli_num_rows($select_rows);
            ?>

            <div class="container-icons">
                <div class="carrinho-compras">
                    <a href="../Carrinho/carrinho.php"><img src="../../img/carrinho.png" alt="carrinho"></a>
                    <span>
                        <?php echo $row_count; ?>
                    </span>
                </div>
            </div>

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
                                <a href="../sair.php" class="button-sair">Sair</a>
                            </div>
                        </div>
                    </div>

                    <?php
                    $select_rows = mysqli_query($conn, "SELECT * FROM carrinho") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                    ?>

                    <div class="container-icons-mobile">
                        <div class="carrinho-compras">
                            <a href="../Carrinho/carrinho.php"><img src="../../img/carrinho.png" alt="carrinho"></a>
                            <span>
                                <?php echo $row_count; ?>
                            </span>
                        </div>
                    </div>

                </div>

                <div class="menu-mobile-bottom">
                    <nav class="nav-mobile">
                        <ul class="nav-list-mobile">
                            <li class="nav-item">
                                <a class="item" href="../paginaInicial">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../paginaProdutos">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../paginaContatos">Contato</a>
                            </li>
                            <li class="nav-item">
                                <?php

                                $email_admin = "SabrinaModasAdmin@gmail.com";
                                $senha_admin = password_hash("SabrinaModasAdmin2023%", PASSWORD_DEFAULT);

                                if (isset($_SESSION['email'])) {
                                    if ($_SESSION['email'] == $email_admin && password_verify($_SESSION['senha'], $senha_admin)) {
                                        echo "<a class='item' href='../../admin/administrador.php'>Admin</a>";
                                    } else {

                                    }
                                } else {

                                }
                                ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="line-form">

            <form class="form input-serch form-mobile" method="get">
                <button value="buscar">
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Pesquisar" name="busca" type="text">
                <button class="reset" type="reset" value="Buscar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>
        </div>
    </header>

    <section class='container-busca'>
        <div class='container-card-busca'>
            <?php

            if (!isset($_GET['busca'])) {
                echo "<p style='display: none'>Teste</p>";
            } else {
                $pesquisa = $conn->real_escape_string($_GET['busca']);
                $sql_pesquisa = "SELECT * FROM produtos WHERE nome_produto LIKE '%$pesquisa%'";
                $sql_query_pesquisa = $conn->query($sql_pesquisa) or die("Erro ao consultar!" . $conn->error);

                if ($sql_query_pesquisa->num_rows == 0) {
                    echo "<p class='mensagem-resultado' style='position: absolute;'>Nenhum resultado encontrado </p>";
                } else {
                    while ($row = $sql_query_pesquisa->fetch_assoc()) {

                        ?>

                        <div class="card-pesquisa">
                            <div class="card-content-pesquisa">
                                <div class="card-img-pesquisa">
                                    <img src="../../admin/upload/<?php echo $row['imagem_produto'] ?>" class="img-card-pesquisa">
                                </div>
                                <div class="card-descricao-pesquisa">
                                    <p class="descricao-card-pesquisa">
                                        <?php echo $row['nome_produto'] ?>
                                    </p>
                                </div>
                                <div class="card-preco-pesquisa">
                                    <p class="preco-card-pesquisa">R$
                                        <?php echo $row['preco_produto'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }

            }

            ?>
        </div>
    </section>

    <div class="container-hr">
        <hr class="hr-header">
    </div>

    <main>

        <section class="container-produtos">

            <div class="container-titulo">
                <h3 class="titulo-produto">Calçados</h3>
            </div>

            <div class="categoria-produtos">
                <?php

                $sqlProduto = "SELECT id_produto, nome_produto, imagem_produto, categoria_produto, preco_produto FROM produtos WHERE categoria_produto = 'Calçados'";

                $result = $conn->query($sqlProduto);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <form action="" method="post">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="img-card" name="imagem_produto"
                                            src="../../admin/upload/<?php echo $row['imagem_produto'] ?>" />
                                    </div>
                                    <div class="card-descricao">
                                        <a
                                            href="../../viewsLogado/Detalhes/index.php?id_produto=<?php echo $row['id_produto'] ?>">
                                            <p class="descricao-card">
                                                <?php echo $row['nome_produto'] ?>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="card-preco">
                                        <p class="preco-card">
                                            R$
                                            <?php echo $row['preco_produto'] ?>
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="produto_nome" value="<?php echo $row['nome_produto'] ?>">
                                <input type="hidden" name="produto_preco" value="<?php echo $row['preco_produto'] ?>">
                                <input type="hidden" name="produto_imagem" value="<?php echo $row['imagem_produto'] ?>">
                                <button type="submit" class="add-carrinho" name="add_carrinho"
                                    value='Adicionar'>Adicionar</button>
                            </div>
                        </form>

                    <?php }
                } else {
                    echo "Não há produtos cadastrados";
                }

                ?>
            </div>

            <div class="container-titulo">
                <h3 class="titulo-produto">Cropped</h3>
            </div>

            <div class="categoria-produtos">
                <?php

                $sqlProduto = "SELECT id_produto, nome_produto, imagem_produto, categoria_produto, preco_produto FROM produtos WHERE categoria_produto = 'Cropped'";

                $result = $conn->query($sqlProduto);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <form action="" method="post">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="img-card" name="imagem_produto"
                                            src="../../admin/upload/<?php echo $row['imagem_produto'] ?>" />
                                    </div>
                                    <div class="card-descricao">
                                        <a
                                            href="../../viewsLogado/Detalhes/index.php?id_produto=<?php echo $row['id_produto'] ?>">
                                            <p class="descricao-card">
                                                <?php echo $row['nome_produto'] ?>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="card-preco">
                                        <p class="preco-card">
                                            R$
                                            <?php echo $row['preco_produto'] ?>
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="produto_nome" value="<?php echo $row['nome_produto'] ?>">
                                <input type="hidden" name="produto_preco" value="<?php echo $row['preco_produto'] ?>">
                                <input type="hidden" name="produto_imagem" value="<?php echo $row['imagem_produto'] ?>">
                                <button type="submit" class="add-carrinho" name="add_carrinho"
                                    value='Adicionar'>Adicionar</button>
                            </div>
                        </form>

                    <?php }
                } else {
                    echo "Não há produtos cadastrados";
                }

                ?>
            </div>

            <div class="container-titulo">
                <h3 class="titulo-produto">Vestido</h3>
            </div>

            <div class="categoria-produtos">
                <?php

                $sqlProduto = "SELECT id_produto, nome_produto, imagem_produto, categoria_produto, preco_produto FROM produtos WHERE categoria_produto = 'Vestido'";

                $result = $conn->query($sqlProduto);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>

                        <form action="" method="post">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="img-card" name="imagem_produto"
                                            src="../../admin/upload/<?php echo $row['imagem_produto'] ?>" />
                                    </div>
                                    <div class="card-descricao">
                                        <a
                                            href="../../viewsLogado/Detalhes/index.php?id_produto=<?php echo $row['id_produto'] ?>">
                                            <p class="descricao-card">
                                                <?php echo $row['nome_produto'] ?>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="card-preco">
                                        <p class="preco-card">
                                            R$
                                            <?php echo $row['preco_produto'] ?>
                                        </p>
                                    </div>
                                </div>
                                <input type="hidden" name="produto_nome" value="<?php echo $row['nome_produto'] ?>">
                                <input type="hidden" name="produto_preco" value="<?php echo $row['preco_produto'] ?>">
                                <input type="hidden" name="produto_imagem" value="<?php echo $row['imagem_produto'] ?>">
                                <button type="submit" class="add-carrinho" name="add_carrinho"
                                    value='Adicionar'>Adicionar</button>
                            </div>
                        </form>

                    <?php }
                } else {
                    echo "Não há produtos cadastrados";
                }

                ?>
            </div>

           

        </section>

    </main>

    <footer class="footer">

        <div class="container-footer">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="titulos-footer">Menu Rodapé</h4>
                    <ul>
                        <li>Produtos</li>
                        <li>Contato</li>
                        <li>Carrinho</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="titulos-footer">Contato</h4>
                    <ul>
                        <li class="footer-item">
                            <p>Telefone: (11) 98475-1617</p>
                        </li>
                        <li class="footer-item">
                            <p>E-mail: contato@sabrina_modas.com.br</p>
                        </li>
                        <li class="footer-item">
                            <p>Endereço: Av. Dos Remédios 1400 - Osasco SP</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="titulos-footer">Links úteis</h4>
                    <ul>
                        <li><a class="footer-item" href="views/Contato/index.php">Página de contato</a></li>
                        <li><a class="footer-item" href="https://www.instagram.com/sabrinamodaas___/">Nosso
                                instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-hr-footer">
            <hr class="footer-hr">
        </div>

        <div class="container-footer-midia">
            <div class="col">
                <div class="col-logo">
                    <a href="#">
                        <img src="../../img/logo.png" alt="Logotipo do Ecommerce" class="logo-rodape">
                    </a>
                </div>
                <div class="col-sociais">
                    <img src="../../img/instagram.png" alt="instagram">
                    <p>@sabrinamodaas___</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="#" class="btn-voltar-topo" style="display: none;" onclick="scrollToTop()">
                    <img src="../../img/de-volta-ao-topo.png" alt="voltar ao topo">
                </a>
            </div>
        </div>



    </footer>

    <script src="../../js/buttonVoltarTopo.js"></script>
    <script src="../../js/menuResponsivo.js"></script>
    <script src="../../js/modoNoturno.js"></script>
</body>

</html>