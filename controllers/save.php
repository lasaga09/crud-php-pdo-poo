<?php 
require_once '../Models/Metodos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(!empty($_POST['name']) && !empty($_POST["edad"])){

	$name = $_POST["name"];
	$edad = $_POST["edad"];

	$metodo = new Metodos();
	$metodo->Insertar($name,$edad);
	header("Location: ../index.php");

}else{
	echo "vacio";
}


}else{
	
}

?>