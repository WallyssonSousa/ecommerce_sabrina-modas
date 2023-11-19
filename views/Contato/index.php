<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabrina Modas | Contatos</title>
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./contato.css">
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
                        <a class="item" href="../Produtos/index.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="#">Contato</a>
                    </li>
                </ul>
            </nav>

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

                </div>

                <div class="menu-mobile-bottom">
                    <nav class="nav-mobile">
                        <ul class="nav-list-mobile">
                            <li class="nav-item">
                                <a class="item" href="../../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../Produtos/index.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="#">Contato</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div class="container-hr">
        <hr class="hr-header">
    </div>

    <main>

        <section class="container-contatos">
            <div class="form-contatos">
                <h2 class="titulo-contato">Fale conosco</h2>
                <p class="semi-titulo">Precisa falar com a gente ? Utilize uma das opções abaixo para entrar em contato
                    conosco.</p>
                <div class="container-form">
                    <h3 class="titulo-form">Formulário de Contato</h3>
                    <p class="semi-titulo--form">Campos marcados com * são de preenchimento obrigatório.</p>
                    <form class="formulario">
                        <label class="label-formulario" for="nome">*Nome:</label>
                        <input class="input-formulario" type="text" name="nome" id="nome">

                        <label class="label-formulario" for="email">*Email:</label>
                        <input class="input-formulario" type="email" name="email" id="email">

                        <label class="label-formulario" for="telefone">Telefone:</label>
                        <input class="input-formulario" type="tel" name="telefone" id="telefone">

                        <label class="label-formulario" for="assunto">Assunto</label>
                        <input class="input-formulario" type="text" name="assunto" id="assunto">

                        <label class="label-formulario" for="mensagem">*Mensagem</label>
                        <textarea class="textarea" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

                        <button class="button-enviar">Enviar</button>

                    </form>


                </div>
            </div>
            <div class="divulgacao-contatos">
                <div class="divulgacao-item">
                    <p class="titulo-divulgacao">Central de Atendimento ao Cliente</p>
                    <div class="divulgacao-container">
                        <img src="../../img/celular.png" alt="icon-celular">
                        <p class="divulgacao-text">(11)99713-5477</p>
                    </div>
                </div>
                <div class="divulgacao-item">
                    <p class="titulo-divulgacao">Atendimento Online</p>
                    <div class="divulgacao-container">
                        <p class="divulgacao-text">Fale por WhatsApp.</p>
                    </div>
                </div>
                <div class="divulgacao-item">
                    <p class="titulo-divulgacao">Email</p>
                    <div class="divulgacao-container">
                        <p class="divulgacao-text">contato@sabrinaModas.com.br</p>
                    </div>
                </div>
                <div class="divulgacao-item">
                    <p class="titulo-divulgacao">Dados da empresa</p>
                    <div class="divulgacao-container">
                        <p class="divulgacao-text">CNPJ: </p>
                    </div>
                </div>
                <div class="divulgacao-item">
                    <p class="titulo-divulgacao">Endereço</p>
                    <div class="divulgacao-container">
                        <p class="divulgacao-text">Sabrina Modas </p>
                    </div>
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
    <script src="../../js/modoNoturno.js"></script>
    <script src="../../js/menuResponsivo.js"></script>
</body>

</php>