<?php
include('ban.php');
include('verifica.php');
$email = $_SESSION['email'];
    $query="select * from usuarios where email='$email'";
     $resultado=mysqli_query($ban,$query); 
     $Nome = mysqli_fetch_assoc($resultado);
    
?>



<html>
    <head>
        
        <meta charset="UTF-8">
 
<link rel="shortcut icon" HREF="https://vignette.wikia.nocookie.net/simswiki/images/f/f8/Vampiro_%28TS4%29.png/revision/latest/scale-to-width-down/40?cb=20170422015340&path-prefix=pt-br">  
     <title> Sistema de Cadastro - Yami </title>
   
 </head>
<!-- Wikplayer https://www.wikplayer.com -->
<script type="text/javascript" src="https://www.wikplayer.com/code.js" 
data-config="{'skin':'skins/wikfull/funkyRed/skin.css','volume':100,'autoplay':false,'shuffle':false,'repeat':0,'showcomment':false,'marqueetexton':true,'placement':'top','showplaylist':false,'playlist':[{'title':'Blutengel%20-%20Morningstar','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DGKKe3C0D70U'},{'title':'Blutengel%20-%20Reich%20mir%20die%20Hand%20','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DNldXlXY5hGY'},{'title':'Blutengel%20-%20%C3%9Cber%20den%20Horizont','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DKquTFWUyboA'},{'title':'Terminal%20Choice%20-%20Don%27t%20Go','url':'https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DrvTDXjPA_bw'}]}" ></script>
<!-- Wikplayer code end -->

<style type="text/css">* {cursor: url(http://ani.cursors-4u.net/symbols/sym-9/sym828.ani), url(http://ani.cursors-4u.net/symbols/sym-9/sym828.png), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2018/02/17/dancing-red-rose.html" target="_blank" title="Dancing Red Rose"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Dancing Red Rose" style="position:absolute; top: 0px; right: 0px;" /></a>

                <br>
                <br>
                <br>
                <br>
 
  <body background="https://images7.alphacoders.com/379/379334.jpg"   >
        
      
<center><iframe
 width="600"
 height="450"
 frameborder="0" style="border:0"
 src= "https://www.google.com/maps/embed/v1/place?key=AIzaSyDLHJh8jgDTD5VMlnvykEENJYP2xPtROE4&q=Brasilia+DF " allowfullscreen>
</iframe> </center>
  
  

  
      
<center> <form action="CadastroBD.php" method="POST">   
    <ul class="menu menu-fancy align-center">
  <li class="menu-fancy-option3"><a href=" http://thehdarknessworld.blogspot.com/">Blog</a></li>
  <li class="menu-fancy-option4"><a href="https://www.facebook.com/lineu.u">Contato</a>
  </li>
</ul>
        <td> <tr>   
        <p> <a href="http://localhost/PhpProject2/Sair.php" > Sair </a>  </p>  </td> </tr>
</center>
    
</body>
</html>
         
 
