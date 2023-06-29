<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <img src="logotipo-ut (1).jpg" class="lpp"/>
        <?php
        
        include 'cone.php';
        
        
        echo '<form method="POST">
             <input type="text" class="No" name="nomenclatura" maxlength="20">
            
';

        $tabla = '

<div class="container" id="tata">
<table id="thetable" class="thetable21 bounceIn">


<tr class="bg-warning">
<th class="bg-white"> <img src="clock (3).png" class="reloj">Hora</th>
<th class="horarioheader">Lunes</th>
<th class="horarioheader">Martes</th>
<th class="horarioheader">Miércoles</th>
<th class="horarioheader">Jueves</th>
<th class="horarioheader">Viernes</th>
<tr>
<td class="HH"><h2>Primera Hora</h2>  <h1>18:00 p.m. - 18:40 p.m.</h1></td>
<td class="celdas">
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Login.php">
        <button type="button"   onclick="axkani()" name="T"  value="#" class="poto" id="primeralunes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" id="inputText2" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  name="T" value="#" class="poto" id="primeramartes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()" name="T" value="#" class="poto" id="primeramiercoles" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()" name="T" value="#" class="poto" id="primerajueves" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"name="T"  value="#" class="poto" id="primeraviernes" >#</button>
        </form>
</td>
<tr>
<td><h3>18:40 p.m. - 19:00 p.m.</h3></td>
<td COLSPAN="5" style="text-align:center;"> DESCANSO INGENIERÍA</td>
<tr>
<td><h2>Segunda hora</h2>  <h1>18:40 p.m. - 19:20 p.m.</h1></td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"name="T"  value="#" class="poto" id="Segundalunes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Segundamartes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Segundamiercoles" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"  value="#" class="poto" id="Segundajueves" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Segundaviernes" >#</button>
        </form>
</td>
<tr>
<td><h3>19:20 p.m. - 19:40 p.m.</h3></td>
<td COLSPAN="5" style="text-align: center; "> DESCANSO TSU</td>
<tr>
<td><h2>Tercera hora</h2>  <h1>19:40 p.m. - 20:20 p.m.</h1></td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Terceralunes" >#</button>
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"  value="#" class="poto" id="Terceramartes" >#</button>
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Terceramiercoles" >#</button>
        </form>
</td>
<td> <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Tercerajueves" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Terceraviernes" >#</button>
        </form>
</td>
<tr>
<td> <h2>Cuarta hora</h2>  <h1>20:20 p.m. - 21:00 p.m.</h1></td>
<td> 
<input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"  value="#" class="poto" id="Cuartalunes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"  value="#" class="poto" id="Cuartamartes" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
       <button type="button" onclick="axkani()"  value="#" class="poto" id="Cuartamiercoles" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Cuartajueves" >#</button>
        </form>
</td>
<td>
 <input onkeyup="activar_boton()" type="text" class="test" id="campo_a_rellenar" >
        
        <form action="Nocturno.php">
        <button type="button" onclick="axkani()"  value="#" class="poto" id="Cuartaviernes" >#</button>
        </form>
</td>
<tr>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="a">
<br><br><br><br>
 <button  class="boton" name="p">Enviar</button>
 <a href="Login.php"  >Regresar</a>
</div>
</div>
</form>'
                ;
        
        echo '<script src="jquery-3.2.1.min.js"></script>'
        . '          <script>
          function axkani(){
          var total= prompt("Ingrese el total de alumnos:","");
          if(total != null){
          window.location="Login.php?nombre=" + total ;
          alert("Alumnos en clase: " +total);
          }
          else{
          alert("No has ingresado el total")
          }
          }
          </script>';
      
        echo $tabla;
       if (isset($_POST['p'])) {
            $nome = $_POST['nomenclatura'];
            $sql = "INSERT INTO horario (nomenclatura, tabla)
			values ('$nome','$tabla')";

            mysqli_query($conn, $sql);
        }
        ?>
    
        
         <footer>
            <hr class="linea">
            <br>
            <br> 
            <br>
            <br>
        </footer>
       
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script>
            function enviarTexto(){
                var texto=document.getElementById("inputText2").value;
                document.getElementById("inputText").value=texto;
            }
        </script>
    </body>
    
</html>