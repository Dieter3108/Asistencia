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
        
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="tabla.php" method="POST" name="frm">
            
             <img class="asitencia" src="1d58291b3b41c2754326df3b34f3b131.png">
             <input type="text" id="ingresarNom" name="nombre" 
                   style="  border: 4px ridge #ea710b;
    border-radius: 34px;
    position: absolute;
    width: 400px;
    height: 45px;
    top:30px;
    left: 40%;
    text-align: center;
        font-family: helvetica;
        font-size: 25px;
        font-weight: bold;"maxlength="20"/><br>
            <input id="btnSeleccionar" type="submit" value="Seleccionar"
                   style=" position: absolute;
    display: inline-block;
    margin:5px 8px;
    color:white;
    font-size:20px;
    font-family:Helvetica;
    text-decoration: none;
    border:2px solid #ea710b;
    padding: 2px 5px 2px 5px;
    border-radius:4px;
    background:#ea710b;
   -webkit-transition-duration: 1s;
   right: 30px;
   bottom: 80px; "/>
             <img src="logotipo-ut (1).jpg" class="lpp"/>
             <div class="iconocentro">
            <img src="event-date-and-time-symbol (6).png" class="img"/></div>
            <script src="js/jquery.min.js"></script>
            <script>
                $(document).on('click', '#btnSeleccionar', function(){
                    if($('#ingresarNom').val()==''){
                        alert('Ingresa una Nomenclatura para continuar');
                        return false;
                    }
                });
            </script>
        </form>
    </body>
</html>
