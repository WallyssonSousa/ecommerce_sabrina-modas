<?php 

    include_once('../../connection/conexao.php');

    if(isset($_POST['salvarProduto'])){

        if (isset($_FILES["imagem"]) && !empty($_FILES["imagem"])) {
            $imagem = 'images/' . $_FILES["imagem"]["name"];
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagem);
        }

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $cor = $_POST['cor'];
        $marca = $_POST['marca'];
        $preco = $_POST['preco'];

        $sql = "UPDATE produtos SET nome_produto='$nome', descricao_produto='$descricao', categoria_produto='$categoria', 
        cor_produto = '$cor', marca_produto='$marca', preco_produto='$preco', imagem_produto='$imagem' WHERE id_produto=$id";

        $result = $conn->query($sql);
    }

    header("Location: uploadDeProduto.php");

?>