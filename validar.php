<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];




$conexion = mysqli_connect("localhost","root","12345","rapanet");
$consulta="SELECT * FROM usuarios_registrados WHERE usuario= '$usuario' and clave ='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:Bienvenido.html");
}else{
    echo"Error en la autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);