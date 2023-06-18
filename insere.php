<?php
  //inclui arquivo responsável pela conexão com o banco de dados
  include('conecta.php');

  $nome = $_POST['name'];
  $lastname = $_POST['lastname'];
  $usuario = $_POST['user'];
  $senha = $_POST['password'];
  $nascimento = $_POST['data'];

  $dataCriada = date('Y/m/d');
  
  //comando SQL para inserir dados na tabela de usuários
  $SQL = "INSERT INTO usuarios(usuario, senha, data_conta) VALUES (?, ?,'$dataCriada')";

  

  try{
    $stmt = $conn->prepare($SQL);
    $stmt->execute([$usuario,$senha]);

    if ($stmt->rowCount()>0){
      header("Location: index.php");
    } 

  }catch(Exception $e){
    echo "Erro ao inserir dados: " . $conn->errorInfo()[2];
  }
  $conn = null;
      
    
?>


