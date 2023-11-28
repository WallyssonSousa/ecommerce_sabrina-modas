<?php

include_once('../../connection/conexao.php');
if (isset($_POST['add_produto'])) {

/*     if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
        $imagem = "./images/" . $_FILES["imagem"]["name"];
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
    } */

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $imagem = $_FILES['imagem']['name'];
    $imagem_tpm_name = $_FILES['imagem']['tmp_name'];
    $pasta_imagem = 'images/' . $imagem;

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
    <title>Sabrina Modas | Admin Produtos</title>
</head>

<body>
    <form action="./uploadDeProduto.php" method="POST" enctype="multipart/form-data">
        <div>
            <p>
                <label>Selecionar o arquivo</label>
                <input name="imagem" type="file" accept="image/png, image/jpg, image/jpeg" />
            </p>
        </div>
        <div>
            <input type="text" name="nome" placeholder="Nome do Produto" required>
        </div>
        <div>
            <input type="text" name="descricao" placeholder="Descrição do Produto" required>
        </div>
        <div>
            <input type="text" name="categoria" placeholder="Categoria do Produto" required>
        </div>
        <div>
            <input type="text" name="cor" placeholder="Cor do Produto" required>
        </div>
        <div>
            <input type="text" name="marca" placeholder="Marca do Produto" required>
        </div>
        <div>
            <input type="number" min="0" name="preco" placeholder="Preço do Produto" required>
        </div>
        <button name="add_produto" type="submit">Enviar Arquivo</button>
    </form>
</body>

</html>