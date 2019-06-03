<?php
session_start();
include("ban.php");
if(empty($_POST['Email']) || empty($_POST['senha'])){
    header('Location: Login.php');
    exit();
}
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$query = "select Email from usuarios where email = '{$email}' and senha = '{$senha}'";
$result = mysqli_query($conexao, $query);
$row= mysqli_num_rows($result);
if($row == 1) {
    $_SESSION['Email'] = $email;
    header('Location: Principal.php');
    exit();      
} else {
    $_SESSION['nao_autenticado']=TRUE;
    header('Location: Login.php');
    exit();    
    }
?>
