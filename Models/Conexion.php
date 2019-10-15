<?php
 
class Conexion{
	
 
	public function conectar(){

		$servername = "localhost";
		$username = "root";
		$password = "";

	try {
		$con = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
	
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}
	catch(PDOException $e)
	{
		echo "Connexion fallida: " . $e->getMessage();
	}
	return $con;

	}
}
 

?>