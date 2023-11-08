<?php

$host = "localhost";
$user = "root";
$pass = "WALoli205*";
$dbname = "sabrinaModas";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexão falhada: " . $conn->connect_error);
}
?>