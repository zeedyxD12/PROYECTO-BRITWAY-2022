<?php
include "conexion.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: panel.php");
}


if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=($_POST["password"]);

    $conexion=mysqli_connect("localhost", "brenogomez", "1234", "britway");
    $consulta="SELECT * FROM usuarios WHERE gmail='$email' AND pwd='$password'";
    $result=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($result);

    if($filas>0){
      echo"Bienvenido";
      header("Location:index.html");
    }
    else{
      echo"Error en la Autentificacion";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

}

?>