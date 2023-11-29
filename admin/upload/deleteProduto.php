<?php 
    if(!empty($_GET['id_produto']))
    {
        include_once('../../connection/conexao.php');

        $id = $_GET['id_produto'];

        $sqlSelect = "SELECT *  FROM produtos WHERE id_produto=$id";

        $result = $conn -> query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE id_produto=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header('Location: uploadDeProduto.php');
?>