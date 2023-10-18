<?php

$host = "localhost";
$user = "root";
$pass = "WALoli205*";
$dbname = "sabrinaModas";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhada: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>