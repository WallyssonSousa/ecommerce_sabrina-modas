<?php
include('connection/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Sabrina Modas | Home</title>


    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <style>
        body.dark {
            .card-pesquisa {
                border: 1px solid var(--corTextPrincipal);
            }

            .container-sobre {
                border: 1px solid var(--corTextPrincipal);
            }
        }

        .mensagem-resultado {
            text-align: center;
            font-weight: 500;
        }

        .container-busca {
            margin: -50px 1em 1em 1em;
            padding: 20px;
            display: grid;
            place-items: center;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .container-card-busca {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            place-items: center;
            position: relative;
            width: 100%;
        }

        .card-pesquisa {
            text-align: start;
            width: 180px;
            height: 260px;
            padding: 10px;
            margin: 5px 10px;
            border: 1px solid #f1f1f1;
            overflow-x: hidden;
            overflow-y: hidden;
            position: relative;
            top: 25px;
        }

        .card-img-pesquisa {
            display: grid;
            place-items: center;
        }

        .card-content-pesquisa {
            position: relative;
            bottom: 20px;
            margin-bottom: 20px;
        }

        .img-card-pesquisa {
            width: 70%;
            height: 200px;
            object-fit: cover;
            position: relative;
        }

        .card-descricao-pesquisa {
            display: flex;
            align-items: flex-start;
            flex-direction: row;
            margin-top: 15px;
        }

        .descricao-card-pesquisa {
            font-size: 14px;
            font-weight: 600;
        }

        .preco-card-pesquisa {
            color: #FFA7DE;
            font-weight: 600;
            margin: 5px 0;
        }

        .card-descricao a{
            color: #393939;
            font-weight: 600;
        }

        .card .button.add-button {
            display: none;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--corRosa);
            color: #fff;
            font-weight: 400;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .card:hover .button.add-button {
            display: block;
        }

        @media (max-width: 1040px) {
            .text-right {
                font-size: 14px;
            }
        }

        @media (max-width: 950px) {

            .titulo-right {
                font-size: 22px;
            }

            .text-right {
                font-size: 12px;
            }

            .img-sobre {
                width: 120%;
                margin: 0;
            }
        }

        @media (max-width: 860px) {
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
        }

        @media (max-width: 850px) {
            .card .button.add-button {
                display: none;
                position: absolute;
                bottom: 8px;
                left: 50%;
                transform: translateX(-50%);
                background-color: var(--corRosa);
                color: #fff;
                font-weight: 400;
                border: none;
                padding: 8px 18px;
                border-radius: 6px;
                text-align: center;
                text-decoration: none;
                font-size: 12px;
                cursor: pointer;
            }
        }

        @media (max-width: 750px) {
            .card .button.button.add-button {
                display: none;
                position: absolute;
                bottom: 8px;
                left: 50%;
                transform: translateX(-50%);
                background-color: var(--corRosa);
                color: #fff;
                font-weight: 400;
                border: none;
                padding: 6px 16px;
                border-radius: 6px;
                text-align: center;
                text-decoration: none;
                font-size: 12px;
                cursor: pointer;
            }
        }

        @media (max-width: 650px) {

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
        }

        @media (max-width: 500px) {
            .container-sobre {
                margin: 40px;
                padding: 40px;
            }

            .preco-card {
                font-size: 12px;
            }
        }

        @media (max-width: 420px) {
            .container-sobre {
                margin: 30px;
                padding: 30px;
            }

            .img-sobre {
                height: 200px;
            }

            .text-right {
                font-size: 11px;
            }

            .titulo-right {
                font-size: 18px;
                bottom: 4px;
            }

            .btn-voltar-topo {
                position: fixed;
                bottom: 5em;
                right: 3em;
                padding: 10px;
                background-color: transparent;
                border: 1px solid #FFA7DE;
                border-radius: 5px;
                font-size: 8px;
                cursor: pointer;
                display: grid;
                place-items: center;
            }
        }
    </style>
</head>

<body>

    <header class="header">

        <div class="line-header">

            <div class="mobile-menu-icon">
                <button class="menu-button" onclick="menuShow()"><img class="icon-mobile"
                        src="img/menu-icon.svg" /></button>
            </div>

            <a href="#">
                <img src="img/logo.png" alt="logo" class="logo-header">
            </a>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="item" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="views/Produtos/">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="views/Contato/">Contato</a>
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


            <div class="container-icons">
                <div class="carrinho-compras">
                    <img src="img/carrinho.png" alt="carrinho">
                </div>
            </div>

            <div class="perfil">
                <div class="container-login-cadastro">
                    <h4 class="nome-conta">Faça login</h4>
                    <div class="login-cadastro">
                        <a href="views/Login/login.php">Login</a>
                        <p>/</p>
                        <a href="views/Cadastro/cadastro.php">Cadastro</a>
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
                            <h4 class="nome-conta">Faça login</h4>
                            <div class="login-cadastro">
                                <a href="views/Login/login.php">Login</a>
                                <p>/</p>
                                <a href="views/Cadastro/cadastro.php">Cadastro</a>
                            </div>
                        </div>
                    </div>

                    <div class="container-icons-mobile">
                        <div class="carrinho-compras">
                            <img src="img/carrinho.png" alt="carrinho">
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
                                <a class="item" href="views/Produtos/">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="views/Contato/">Contato</a>
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

    <main>

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
                            echo "<div class='card-pesquisa'>";
                            echo "<div class='card-content-pesquisa'>";
                            echo "<div class='card-img-pesquisa'>";
                            echo '<img class="img-card-pesquisa" src="admin/upload/' . $row['imagem_produto'] . '" />';
                            echo "</div>";
                            echo "<div class='card-descricao-pesquisa'>";
                            echo "<p class='descricao-card-pesquisa'>" . $row['nome_produto'] . "</p>";
                            echo "</div>";
                            echo "<div class='card-preco-pesquisa'>";
                            echo "<p class='preco-card-pesquisa' style='color: #FFA7DE; font-weight: 500;'>R$ " . $row['preco_produto'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }

                }

                ?>
            </div>
        </section>

        <div class="container-banner" id="slider">
            <div>
                <img src="img/Banner-2.jpeg" alt="Imagem 1" class="banner">
            </div>
            <div>
                <img src="img/Banner-1.jpeg" alt="Imagem 2" class="banner">
            </div>
            <div>
                <img src="img/banner.jpg" alt="Imagem 3" class="banner">
            </div>
        </div>

        <section class="container-categoria">
            <h2 class="titulo-categoria">Destaques</h2>

            <div class="container-card">
                <?php

                $sqlProduto = "SELECT id_produto , 
                                nome_produto, 
                                imagem_produto, 
                                categoria_produto, 
                                preco_produto 
                                FROM produtos 
                                WHERE categoria_produto = 'Destaque'";

                $result = $conn->query($sqlProduto);

                /* print_r($result); */

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='card'>";
                        echo "<div class='card-content'>";
                        echo "<div class='card-img'>";
                        echo '<img class="img-card"  src="admin/upload/' . $row['imagem_produto'] . '" />';
                        echo "</div>";
                        echo "<div class='card-descricao'>";
                        echo "<a href='./views/Detalhes/index.php?id_produto=$row[id_produto]'>
                                <p class='descricao-card'>" . $row['nome_produto'] . "</p>
                            </a>";
                        echo "</div>";
                        echo "<div class='card-preco'";
                        echo "<p class='preco-card' style='color: #FFA7DE; font-weight: 500;'>R$ " . $row['preco_produto'] . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='card-buttons'>";
                        echo "<button class='button add-button'>Adicione</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum produto encontrado.</p>";
                }
                ?>
            </div>
        </section>

        <section class="container-sobre">
            <div>
                <div class="container-img-sobre">
                    <img src="img/sabrinaModas_lojaFisica.jpeg" alt="Imagem 1" class="img-sobre">
                </div>
            </div>

            <div class="container-right-sobre">
                <h3 class="titulo-right">Sobre</h3>
                <p class="text-right">Sonhada e realizada pela empreendedora Sabrina Marques, essa loja começou de forma
                    simples, crescendo
                    aos poucos pelas redes sociais até chegarmos aqui, não foi fácil mas sempre buscamos crescer. Nossa
                    loja foi inaugurada através de muitas lutas e conquistas. Hoje estamos localizados em Osasco com
                    nossa primeira loja, que está aberta para visita dos nossos clientes trazendo sua melhor experiência
                    conosco, e agora com nosso site exclusivo.</p>
            </div>
        </section>

    </main>

    <footer class="footer">

        <div class="container-footer">
            <div class="row">
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
                        <li><a class="footer-item" href="views/Contato/">Página de contato</a></li>
                        <li><a class="footer-item" href="https://www.instagram.com/sabrinamodaas___/">Nosso
                                instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-hr">
            <hr class="footer-hr">
        </div>

        <div class="container-footer-midia">
            <div class="col">
                <div class="col-sociais">
                    <img src="img/instagram.png" alt="instagram">
                    <p>Sabrinamodaas___</p>
                </div>
                <div class="col-logo">
                    <a href="#">
                        <img src="img/logo.png" alt="Logotipo do Ecommerce" class="logo-rodape">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="#" class="btn-voltar-topo" style="display: none;" onclick="scrollToTop()">
                    <img src="img/de-volta-ao-topo.png" alt="voltar ao topo">
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
        integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
        integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
        integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/carrosselSobre.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/buttonVoltarTopo.js"></script>
    <script src="js/menuResponsivo.js"></script>
    <script src="js/modoNoturno.js"></script>
    <script src="js/dropdownUsuario.js"></script>
</body>

</html>