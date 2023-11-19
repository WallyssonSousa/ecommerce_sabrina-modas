<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Produtos</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./produto.css">
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
                        <a class="item" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../Contato/index.php">Contato</a>
                    </li>
                </ul>
            </nav>

            <form class="form input-serch">
                <button>
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Faça sua pesquisa" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>

            <div class="container-icons">
                <div class="carrinho-compras">
                    <img src="../../img/carrinho.png" alt="carrinho">
                </div>
            </div>

            <div class="perfil">
                <div class="container-login-cadastro">
                    <h4 class="nome-conta">Faça login</h4>
                    <div class="login-cadastro">
                        <a href="../Login/login.php">Login</a>
                        <p>/</p>
                        <a href="../Cadastro/cadastro.php">Cadastro</a>
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
                                <a href="../Login/login.php">Login</a>
                                <p>/</p>
                                <a href="../Cadastro/cadastro.php">Cadastro</a>
                            </div>
                        </div>
                    </div>

                    <div class="container-icons-mobile">
                        <div class="carrinho-compras">
                            <img src="../../img/carrinho.png" alt="carrinho">
                        </div>
                    </div>

                </div>

                <div class="menu-mobile-bottom">
                    <nav class="nav-mobile">
                        <ul class="nav-list-mobile">
                            <li class="nav-item">
                                <a class="item" href="../../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="#">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../Contato/index.php">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="line-form">

            <form class="form input-serch form-mobile">
                <button>
                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="search">
                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                            stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>
                <input class="input" placeholder="Faça sua pesquisa" required="" type="text">
                <button class="reset" type="reset">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </form>

        </div>
    </header>


    <div class="container-hr">
        <hr class="hr-header">
    </div>

    <main>


        <section class="container-produtos">

            <div class="container-titulo">
                <h3 class="titulo-produto">Tênis</h3>
            </div>

            <div class="categoria-produtos" id="tenis">
                
            </div>

            <div class="container-titulo">
                <h3 class="titulo-produto">Conjunto</h3>
            </div>

            <div class="categoria-produtos" id="conjunto">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto1.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">

                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto2.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto3.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto4.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>

                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto5.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto6.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto1.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img class="img-card" src="../../img/produtos/produto1.png" alt="produto1">
                        </div>
                        <div class="card-descricao">
                            <p class="descricao-card">Conjunto Planet Girls</p>
                        </div>
                        <div class="card-preco">
                            <p class="preco-card">R$ 80,00</p>
                        </div>
                    </div>
                    <button class="add-carrinho">Adicione</button>
                </div>
            </div>

        </section>

    </main>

    <footer class="footer">

        <div class="container-footer">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="titulos-footer">Sobre</h4>
                    <p class="footer-item">Sabrina Modas é um empreendimento que busca trazer modernidade e estilo
                        através de peças de alta qualidade gerando conforto e autoestima com os melhores preços e
                        serviços.</p>
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
                        <li><a class="footer-item" href="https://www.instagram.com/sabrinamodaas___/">Nosso instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-hr-footer">
            <hr class="footer-hr">
        </div>

        <div class="container-footer-midia">
            <div class="col">
                <div class="col-sociais">
                    <img src="../../img/instagram.png" alt="instagram">
                    <p>Sabrinamodaas___</p>
                </div>
                <div class="col-logo">
                    <a href="#">
                        <img src="../../img/logo.png" alt="Logotipo do Ecommerce" class="logo-rodape">
                    </a>
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