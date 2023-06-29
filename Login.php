<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/Login.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="b">
          <h2 class="titulo">Asistencia</h2>
        <div class="bounceIn cuadro" >
           
            <form action="index.php" class="hola" method="post">
  <div class="imgcontainer">
      <img src="logotipo-ut (1).jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" placeholder="Ingrese Usuario" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese Contraseña" name="psw" required>
          
  </div>

                <table style="">
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </table>
  <div class="container">
      <!--- entrar y cancelar ids coreespondientes-->
                 <button type="submit" id="entrar" >Entrar</button> 
             <button type="button" id="cancelar">Cancelar</button>  
              
 
  </div>
</form>
        </div>
          
       
</body>
       
</html>