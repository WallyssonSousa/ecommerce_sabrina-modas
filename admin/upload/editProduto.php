<?php

include_once('../../connection/conexao.php');

if (!empty($_GET['id_produto'])) {
    include('../../connection/conexao.php');

    $id = $_GET['id_produto'];

    $sqlSelect = "SELECT * FROM produtos WHERE id_produto=$id";

    $result = $conn->query($sqlSelect);

    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()){
            $nome = $row['nome_produto'];
            $descricao = $row['descricao_produto'];
            $categoria = $row['categoria_produto'];
            $cor = $row['cor_produto'];
            $marca = $row['marca_produto'];
            $preco = $row['preco_produto'];
            $imagem = $row['imagem_produto'];
        }
    }
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
            <a href="../upload/uploadDeProduto.php" class="button-voltar">Voltar</a>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="salvarProduto.php" method="POST" enctype="multipart/form-data">
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="nome" placeholder="Nome do Produto" value="<?php echo $nome ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="descricao" placeholder="Descrição do Produto"  value="<?php echo $descricao ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="categoria" placeholder="Categoria do Produto"  value="<?php echo $categoria ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="cor" placeholder="Cor do Produto" value="<?php echo $cor ?>"required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="text" name="marca" placeholder="Marca do Produto"  value="<?php echo $marca ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper">
                    <input class="input-box" type="number" min="0" name="preco" placeholder="Preço do Produto" value="<?php echo $preco ?>" required>
                    <span class="underline"></span>
                </div>
                <div class="input-wrapper-file">
                    <input class="input-box-file" name="imagem" type="file" value="<?php echo $imagem ?>" accept="image/png, image/jpg, image/jpeg" />
                    <div class="input-file-button">Selecione um Arquivo</div>
                </div>
                <div class="container-button-add">
                    <input type="hidden" name="id" value=<?php echo $id?>>
                    <input class="button-add" name="salvarProduto" id="salvarProduto" type="submit" value="Salvar produto" />
                </div>
            </form>
        </div>
    </main>
</body>

</html>