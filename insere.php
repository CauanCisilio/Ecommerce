<?php
include('conecta.php');

$nome = $_POST['name'];
$lastname = $_POST['lastname'];
$usuario = $_POST['user'];
$senha = $_POST['password'];
$nascimento = $_POST['data'];

$inserir = "INSERT INTO usuarios(usuario, senha) VALUES ('$usuario', '$senha')";


if ($conn->exec($inserir)) {
    header("Location: index.php");
  } 
  
  else{
      echo "Erro ao inserir dados: " . $conn->errorInfo()[2];
  }
    
  $conn = null;
?>


