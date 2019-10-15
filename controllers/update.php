<?php 
require_once '../Models/Metodos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(!empty($_POST['name']) && !empty($_POST["edad"])){

	$name = $_POST["name"];
	$edad = $_POST["edad"];
	$id=$_POST["id"];

	$metodo = new Metodos();
	$metodo->Update($name,$edad,$id);
	header("Location: ../index.php");

}else{
	echo "vacio";
}


}else{
	
}

?>