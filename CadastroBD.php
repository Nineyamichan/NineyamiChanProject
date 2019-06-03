<?php
include ('ban.php');
$nome= $_POST['Nome'];
$senha= $_POST['senha'];
$email= $_POST ['email'];

$inserir="INSERT INTO cadastrosite(Nome,senha,email) VALUES ('$nome', '$senha', '$email')";
$resultado= mysqli_query($conecta, $inserir);
header('location: Login.php');  

?>
