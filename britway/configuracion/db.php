<?php

class Database 
{

     public    $hostname = "localhost";
     public    $database = "britway";
     public    $username = "Britway1";
     public    $password = "Britway_2022";
 public $charset = "utf8";

    function conectar() 
    {
        try{
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            
            $pdo = new PDO($conexion, $this->$username, $this->$password, $options);
            
            return $pdo;
        }catch(PDOException $e){
        echo 'Error de Conexion:' . $e->getMessage();
        exit;
        }
    }
}
?>
