<?php 
require_once 'Conexion.php';

class Metodos{

	public $con;

	/*listar*/
	public function List(){
		$c=new Conexion();
		$this->con=$c->conectar();

		$st = $this->con->prepare("SELECT * FROM alumno");
		$st->execute();
		
		$rs = $st->fetchAll();
		return $rs;
	}


	/*listarxid*/
	public function Listxid($id){
		$c=new Conexion();
		$this->con=$c->conectar();
		
		$st = $this->con->prepare("SELECT * FROM alumno where id=?");
		$st->execute(array($id));
		$rs = $st->fetchAll();
		return $rs;
	}


  /*insert*/
	public function Insertar($name,$edad){
	$c=new Conexion();
	$this->con=$c->conectar();
	 $sql = "INSERT INTO alumno(nombre,edad) values(?,?)";
	 $st = $this->con->prepare($sql);
	 $st->execute(array($name,$edad));
}


	/*update*/
	public function Update($name,$edad,$id){
	$c=new Conexion();
	$this->con=$c->conectar();
	 $sql = "UPDATE alumno set nombre=?, edad=? where id=?";
	 $st = $this->con->prepare($sql);
	 $st->execute(array($name,$edad,$id));
	}


	/*delete*/
	 public function Delete($id){
	 $c=new Conexion();
	 $this->con=$c->conectar();
	 $sql = "DELETE  from  alumno where id=?";
	 $st = $this->con->prepare($sql);
	 $st->execute(array($id));
}


}

/*$m=new Metodos();
$m->List();*/


 ?>