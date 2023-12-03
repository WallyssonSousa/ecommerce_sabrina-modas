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

if(isset($_POST['update_update_btn'])){
    $update_value = $_POST['update_quantidade'];
    $update_id = $_POST['update_quantidade_id'];
    $update_quantidade_query = mysqli_query($conn, "UPDATE carrinho 
    SET quantidade = '$update_value' WHERE id_carrinho = '$update_id'");

    if($update_quantidade_query){
        header('location: carrinho.php');
    }
}

if(isset($_GET['apagarTudo'])){
    mysqli_query($conn, "DELETE FROM carrinho");
    header('location: carrinho.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="carrinho.css">
    <title>Sabrina Modas | Carrinho</title>
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
                        <a class="item" href="../../views/Produtos/">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="item" href="../../views/Contato/">Contato</a>
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

                </div>

                <div class="menu-mobile-bottom">
                    <nav class="nav-mobile">
                        <ul class="nav-list-mobile">
                            <li class="nav-item">
                                <a class="item" href="../paginaInicial/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="views/Produtos/">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="item" href="views/Contato/">Contato</a>
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

    </header>

    <main>

        <section class="container-titulo">
            <h3 class="titulo">Meu Carrinho</h3>
        </section>

        <section class="container-carrinho">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Imagem</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_carrinho = "SELECT * FROM carrinho;";
                    $result = $conn->query($select_carrinho);
                    $total = 0;

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><img class="lista-img" name="imagem_produto"
                                        src="../../admin/upload/<?php echo $row['imagem_produto'] ?>" />
                                </td>
                                <td>
                                    <?php echo $row['nome_produto'] ?>
                                </td>
                                <td>
                                    R$
                                    <?php echo number_format($row['preco_produto']); ?>
                                </td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="update_quantidade_id"
                                            value="<?php echo $row['id_carrinho'] ?>">
                                        <input type="number" name="update_quantidade" min="1"
                                            value="<?php echo $row['quantidade'] ?>">
                                        <input type="submit" value="update" name="update_update_btn">
                                    </form>
                                </td>
                                <td>
                                    R$
                                    <?php echo $sub_total = number_format($row['preco_produto'] * $row['quantidade']); ?>
                                </td>
                                <td>
                                    <a href='apagar.php?id_carrinho="<?php echo $row['id_carrinho']; ?>"'
                                        class="btn-remover">Remover</a>
                                </td>
                            </tr>

                        <?php
                        $total += $sub_total;
                        }
                    }
                    ?>
                    <tr>
                        <td>
                            <a href="../../views/Produto/index.php">Continuar comprando</a>
                        </td>
                        <td colspan="3">Total</td>
                        <td><?php echo $total ?></td>
                        <td><a href="carrinho.php?apagarTudo" class="btn-deletar"> Apagar tudo </a></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="../../js/menuResponsivo.js"></script>
</body>

</html>