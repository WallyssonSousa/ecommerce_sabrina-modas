<?php

include_once('../../connection/conexao.php');

if (isset($_POST['add_produto'])) {

    if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
        $imagem = 'images/' . $_FILES["imagem"]["name"];
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
    }

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $result = mysqli_query($conn, "INSERT INTO produtos(nome_produto, descricao_produto, imagem_produto, categoria_produto, cor_produto, marca_produto, preco_produto)
     VALUES('$nome', '$descricao', '$imagem', '$categoria', '$cor', '$marca', '$preco' )");

    header("Location: uploadDeProduto.php");
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="upload.css">
    <title>Sabrina Modas | Admin Produtos</title>
    <style>
        body.dark {

            background: #2a2c2b;
            color: #fafafa;

            .formulario {
                border: 1px solid var(--corTextPrincipal);
            }

            .input-box {
                border-bottom: 2px solid var(--corTextPrincipal);
                color: var(--corPrimaria);
            }

            .input-box::placeholder {
                color: #5a5a5a;
            }

            .container {
                border: 1px solid #393939;
            }

            .input-file-button {
                border-bottom: 2px solid #393939;
                color: #75757d;
            }

            .table {
                width: 90%;
                border-collapse: collapse;
                border: 1px solid #393939;
                border-radius: 5px;
                margin-top: 3em;
            }

            th {
                padding: 15px 20px;
                text-align: left;
                border: 1px solid #393939;
                font-weight: 500;
            }

            td {
                padding: 15px 20px;
                text-align: left;
                border: 1px solid #393939;
                font-weight: 400;
            }
        }

        .switch {
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 2em;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            --background: var(--corRosa);
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: var(--corRosa);
            transition: .5s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.4em;
            width: 1.4em;
            border-radius: 50%;
            left: 10%;
            bottom: 15%;
            box-shadow: inset 8px -4px 0px 0px var(--corPrimaria);
            background: var(--background);
            transition: .5s;
        }

        input:checked+.slider {
            background-color: var(--corRosa);
        }

        input:checked+.slider:before {
            transform: translateX(100%);
            box-shadow: inset 15px -4px 0px 15px var(--corPrimaria);
        }

        .table {
            width: 90%;
            border-collapse: collapse;
            border: 1px solid #f1f1f1;
            border-radius: 5px;
            margin-top: 3em;
        }

        th {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #f1f1f1;
            font-weight: 500;
        }

        td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #f1f1f1;
            font-weight: 400;
        }

        .lista-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            position: relative;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="../administrador.php" class="button-voltar">Voltar</a>
        </div>
        <div>
            <label class="switch">
                <input type="checkbox" checked="checked" id="chk" />
                <span class="slider"></span>
            </label>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="./uploadDeProduto.php" method="POST" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="descricao" placeholder="Descrição do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="categoria" placeholder="Categoria do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="cor" placeholder="Cor do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="marca" placeholder="Marca do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="number" min="0" name="preco" placeholder="Preço do Produto" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper-file">
                    <input class="input-box-file" name="imagem" type="file" accept="image/png, image/jpg, image/jpeg" />
                    <div class="input-file-button">Selecione um Arquivo</div>
                </div>
                <div class="container-button-add">
                    <button class="button-add" name="add_produto" type="submit">Enviar Arquivo</button>
                </div>
            </form>
        </div>
        <div class="container-listaDeProdutos">
            <h2>Lista de Produtos</h2>
            <table class="table">
                <thead>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Preço</th>
                    <th scope="col">...</th>
                </thead>
                <tbody>
                    <?php
                    $selectProdutos = mysqli_query($conn, "SELECT * FROM produtos");
                    if (mysqli_num_rows($selectProdutos) > 0) {
                        while ($row = mysqli_fetch_assoc($selectProdutos)) {

                            ?>
                            <tr>
                                <td><img class="lista-img" src="./<?php echo $row['imagem_produto'] ?>" alt="Imagem" /></td>
                                <td>
                                    <?php echo $row['nome_produto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['descricao_produto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['categoria_produto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['cor_produto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['marca_produto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['preco_produto'] ?>
                                </td>
                                <td> <a class='button-editar'
                                        href='editProduto.php?id_produto=<?php echo $row['id_produto'] ?>'>
                                        <img src='../../img/lapis.png' />
                                    </a>
                                    <a class='button-excluir'
                                        href='deleteProduto.php?id_produto=<?php echo $row['id_produto'] ?>'>
                                        <img src='../../img/lixeira.png' />
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "Nenhum produto encontrado!";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>


    <script src="../../js/modoNoturno.js"></script>
</body>

</html>