<?php 

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == "seu_email@exemplo.com" && $senha == "sua_senha") {
    $_SESSION['logado'] = true;
    header('Location: tela_exclusiva.php');
} else {
    $erro = "Email ou senha incorretos!";
}

/* =============================================================== */

$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    $_SESSION['logado'] = true;
    header('Location: tela_exclusiva.php');
} else {
    $erro = "Email ou senha incorretos!";
}

?>