<?php

$server = "localhost";
$user = "Britway1";
$pass = "Britway_2022";
$db =  "britway";

$conn = mysqli_connect($server,$user,$pass,$db);

if($conn->connect_error){
    die("ERROR: No se pudo conectar al servidor: " .$conn -> connect_error);
}
function conectar()
{
	try{
		$conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . 
		"; charset=" . $this->charset;
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false
		];
		
		$pdo = new PDO($conexion, $this->username, $this->password, $options);
		
		return $pdo;
	}catch(PDOException $e){
	echo 'Error de Conexion:' . $e->getMessage();
	exit;
	}
}

?>
