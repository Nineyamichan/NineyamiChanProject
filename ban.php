<?php
 $hostname = "localhost";
 $user = "root";
 $password = "";
 $database = "cadastro";
         
 $conecta = mysqli_connect($hostname,$user,$password,$database);
 if ($conecta->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso";
 $conecta->close();
?>
