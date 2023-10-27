<?php 

    include('../connection/conexao.php');

    $palavra = $_POST['palavra'];

    $query = "SELECT * FROM produtos WHERE nome_produto LIKE '%palavra%' ";

    $resultBuscas = $conexao->query($query); 

?>
