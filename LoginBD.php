<?php
 
$email=$_POST['email'];
$senha=$_POST['senha'];
$achar = "SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'";
$resultado=$conecta->query($achar);
    if($resultado->num_rows>0){
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        header('location:');
            
    }else{
        session_unset();
        session_destroy();
            echo "<script>  
                alert ('Login ou senha incorreto!');
                window.location.href = 'Login';
                </script>";
    }
?>
