<h1>teste</h1>
<?php
    include 'database.php';

    $usuario= addslashes($_POST['usuario']);
    $senha= md5($_POST['senha']);
    

    

    $query= "Select * FROM usuarios WHERE usuario= '$usuario' AND senha = '$senha' ";

    $conexao = mysqli_query($conexao, $query);

    if(mysqli_num_rows($conexao) == 1){
        session_start();
        $_SESSION['login']= TRUE;
        $_SESSION['usuario']=$usuario;
        header('location:index.php');
    }else{
        
        header('location:index.php?erro');
        echo 'Não foi possível fazer o login';
    }

?>