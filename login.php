<?php
include('conecta.php');

$consultaNome = $_POST['user'];
$consultaSenha =  $_POST['password'];

$SQL = "SELECT usuario,senha FROM usuarios WHERE usuario = '$consultaNome' AND senha = '$consultaSenha'";
$resultado = $conn->query($SQL);

if ($resultado->rowCount() > 0) {
    // Redirecionar para a página desejada
    header("Location: index.php");
    exit(); // Certifique-se de chamar exit() após o redirecionamento
} else {
    echo "<script>alert('Usuário ou senha incorretos');</script>";
    // Redirecionar para a página de login
    header("Location: login.php");
    exit(); // Certifique-se de chamar exit() após o redirecionamento
}
?>
