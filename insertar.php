<?php 
	$conexion=mysqli_connect('localhost','root','','ax');

	$nombre=$_GET['nombre'];
	

	$sql="INSERT INTO total (numero)
			values ('$nombre')";
	mysqli_query($conexion,$sql);
      
class insertar{
    public $tabla;
}
$uninsertar = new insertar();
$uninsertar ->tabla ="index.php";
function cambiardepagina($tabla, $numero){
    
    
}
 ?>