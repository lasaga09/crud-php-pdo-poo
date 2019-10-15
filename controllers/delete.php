<?php 
require_once '../Models/Metodos.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$id = $_POST['id'];
	$metodo = new Metodos();
	$metodo->Delete($id);
	echo 'Eliminado';




}else{
	
}

?>