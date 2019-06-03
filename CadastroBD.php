<?php
include 'ban.php';
$nome= $_POST['Nome'];
$senha= $_POST['senha'];
$email= $_POST ['email'];
$inserir="INSERT INTO cadastrosite(Nome,senha,email) VALUES ('$nome', '$senha', '$email')";
$resultado= mysqli_query($conecta, $inserir);
    if(mysqli_affected_rows($conecta)!= 0){
        echo "<script type=\"text/javascript\">
            alert(\"Cadastro realizado com sucesso\");
            </script>";
header('location: index.php');    
}else{
    echo "<script type=\"text/javascript\">
            alert(\"Cadastro nao realizado com sucesso\");
            </script>";
header('location: Login.php');  
}
?>
