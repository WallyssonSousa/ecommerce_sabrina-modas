<?php
    if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"])){
        move_uploaded_file($_FILES["imagem"]["tmp_name"], "./images/" . $_FILES["imagem"]["name"]);
        echo "update realizado com sucesso";
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
        <p>
            <label for="">Selecionar o arquivo</label>
            <input name="imagem" type="file" accept="image/*" />
        </p>
        <button name="upload" type="submit">Enviar Arquivo</button>
    </form>
</body>

</html>