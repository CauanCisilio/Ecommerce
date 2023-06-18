<?php
    include('conecta.php');

    $consultaNome = $_POST['user'];
    $consultaSenha =  $_POST['password'];
    
            $SQL = "SELECT usuario,senha FROM usuarios WHERE usuario = ? AND senha = ?";
            $stmt = $conn->prepare($SQL);
            $stmt->execute([$consultaNome,$consultaSenha]);

        if(!empty($consultaNome) || !empty($consultaSenha)){
            
            // Redirecionar para a página desejada
            header("Location: index.php");
            exit(); 
            
        if ($stmt->rowCount() > 0) {
                // caso encontre uma linha de usuário redireciona para a página principal
                header("Location: index.php");
                exit(); 
        }
        
    }else{
        echo "
        <script>
            alert('Usuário ou senha incorretos');
        </script>";
        
        header("Location: login.html"); // Redirecionar para a página de login
        exit(); 
    }
?>
