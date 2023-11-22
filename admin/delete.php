<?php 

if(!empty($_GET['id_usuario']))
{
    include_once('../connection/conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT *  FROM usuarios WHERE id_usuario=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM usuarios WHERE id_usuario=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: administrador.php');

?>