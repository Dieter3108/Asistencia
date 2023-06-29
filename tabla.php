<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>hh</title>
       <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    </head>
    <div class="row justify-content-md-center">
    <div class="col-xs-12">
    <body>
      
        <img src="logotipo-ut (1).jpg" class="lpp"/>
        <?php
        include 'cone.php';
        $nombre=$_POST['nombre'];
       $sql=("SELECT * FROM horario WHERE nomenclatura='$nombre'");
       
       $registro=$conn->query($sql);
       while ($reg= $registro->fetch_assoc()){
        $nome= $reg['nomenclatura'];
           $tabla= $reg['tabla'];
       }
        ?>
  
        <input type="text" class="No" readonly value="<?php echo $nome;?>"><br>
        
        <?php echo $tabla;?>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
        
         
        
      
      
    </body>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-xs-12">
    <footer>
            <hr class="linea">
            <br>
            <br> 
            <br>
            <br>
        </footer>
    </div>
  </div>
   
</html>
<script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/popper.min.js"></script>'
        . '          <script>
          function axkani(){
            var total= prompt("Ingrese el total de alumnos:","");
            if(total != ''){
              window.location="Login.php?nombre=" + total ;
              alert("Alumnos en clase: " +total);
            }else{
              alert("No has ingresado el total");
              return false;
            }
          }
          </script>