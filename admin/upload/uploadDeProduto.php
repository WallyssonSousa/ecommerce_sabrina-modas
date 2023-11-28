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

    header('Location: uploadDeProduto.php');
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
</head>

<body>

    <header>
        <div class="container-buttonVoltar">
            <a href="../administrador.php" class="button-voltar">Voltar</a>
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
                <div class="container-button-add" >
                    <button class="button-add" name="add_produto" type="submit">Enviar Arquivo</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>