<?php 
    if(!empty($_GET['id_carrinho'])){
        include('../../connection/conexao.php');

        $id = $_GET['id_carrinho'];

        $sqlSelect = "SELECT * FROM carrinho WHERE id_carrinho=$id";

        $result = $conn -> query($sqlSelect);

        if($result->num_rows > 0){
            $sqlApagar = "DELETE FROM carrinho WHERE id_carrinho=$id";
            $resultApagar = $conn -> query($sqlApagar);
        }
    }
    header('Location: carrinho.php');
?>