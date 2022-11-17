<?php
            $hostname='localhost';
            $username='Britway1';
            $contrasena='Britway_2022';
            $database='britway';
 
 
 
$conexion=new mysqli('localhost','Britway1','Britway_2022','britway');
if($conexion->connect_error){
 
    die("error: No se pudo conectar conectar al servidor: ".$conn -> connect_error);
 
 
}else{
 
 
$gmail=  $_REQUEST['gmail'];  
$pwd = $_REQUEST['pwd'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
 
$consulta = "INSERT INTO usuarios (gmail, pwd, direccion, telefono) VALUES ('$gmail','$pwd', '$direccion', $telefono);";
//$consulta = "INSERT INTO Usuarios VALUES ('$Email','$Nombre','$Apellido',$Telefono,'$password');";
//echo $consulta;
  $ejecutar = mysqli_query($conexion,$consulta);
   
 
}
if ($mysqli->connect_error) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
 
if ($ejecutar) {
    header ("/index.php");
   
}
else {
    echo 'Ha ocurrio un problema en el registro';
}
$ejecutar->close();
?>
