<?php
session_start();
include_once('../../connection/conexao.php');

$paginaInicialSemLogin = '../index.php';

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ' . $paginaInicialSemLogin);
} else {
    $logado = $_SESSION['nome'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <title>Sabrina Modas | Checkout</title>
    <style>
        .container-checkout-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .checkout-pedido{
            border: 1px solid #f1f1f1;
            color: #FFA7DE;
            padding: 10px;
            text-align: center;
            width: 50%;
            position: relative;
            left: 150px;
        }

        .checkout-titulo {
            font-weight: 500;
            text-align: center;
            margin: 30px;
        }

        .checkout-form {
            display: flex;
            flex-direction: column;
            border: 1px solid #f1f1f1;
        }

        .checkout {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 20px;
        }

        .checkout-left {
            margin: 0 20px;
        }

        .checkout-right {
            margin: 0 20px;
        }

        .input-wrapper {
            position: relative;
            width: 240px;
            margin: 10px auto;
        }

        .input-box {
            font-size: 16px;
            padding: 10px 0;
            border: none;
            border-bottom: 2px solid #F1F0FA;
            color: var(--corTextPrincipal);
            width: 100%;
            background-color: transparent;
            transition: border-color 0.3s ease-in-out;
        }

        .underline {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--corRosa);
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .input-box:focus {
            border-color: var(--corRosa);
            outline: none;
        }

        .input-box:focus+.underline {
            transform: scaleX(1);
        }

        .btn-checkout {
            width: 40%;
            display: flex;
            justify-content: center;
            position: relative;
            background-color: #FFA7DE;
            color: var(--corPrimaria);
            font-weight: 400;
            border: none;
            padding: 12px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.5s all;
            margin: 40px;
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
                        <a class="item" href="../paginaInicial/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../paginaProdutos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../paginaContatos">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="./upload/uploadDeProduto.php">Editar</a>
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
                                <a class="item" href="../viewsLogado/paginaProdutos/">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="../viewsLogado/paginaContato/">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="./uploadDeProduto.php">Editar</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <main>

        <section class="container">
            <section class="container-checkout-form">
                <form action="" method="post" class="checkout-form">
                    <h3 class="checkout-titulo">Complete seu pedido</h3>

                    <div class="checkout-pedido">
                        <?php
                        $sqlCarrinho = "SELECT * FROM carrinho";
                        $result = $conn->query($sqlCarrinho);
                        $total = 0;
                        $total_geral = 0;

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                $preco_total = number_format($row['preco_produto'] * $row['quantidade']);
                                $total_geral = $total += $preco_total;
                                ?>

                                <span>
                                    <?= $row['nome_produto']; ?>(
                                    <?= $row['quantidade'] ?>)
                                </span>

                            <?php }
                        } else {
                            echo "Teste";
                        }
                        ?>

                        <span class="total-geral">Total geral:
                            <?= $total_geral ?>,0
                        </span>
                    </div>

                    <div class="checkout">
                        <div class="checkout-left">
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="nome" placeholder="Nome:" required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="telefone" placeholder="Telefone" required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="email" placeholder="Email" required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="cep" placeholder="Cep" required>
                                <span class="underline"></span>
                            </div>
                        </div>
                        <div class="checkout-right">
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="endereco" placeholder="Endereço" required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="numero" placeholder="Número do endereço"
                                    required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="cidade" placeholder="Cidade" required>
                                <span class="underline"></span>
                            </div>
                            <div class="input-wrapper">
                                <input class="input-box" type="text" name="estado" placeholder="Estado" required>
                                <span class="underline"></span>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Concluir compra" class="btn-checkout">
                </form>
            </section>
        </section>
    </main>

    <script src="../../js/modoNoturno.js"></script>
</body>

</html>