<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in OOP PHP - Create</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">

	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="controllers/update.php">
			<h2>Create Operation in CRUD Application</h2>
			<?php require_once 'Models/Metodos.php';
			$metodo = new Metodos();
			 $id = $_GET['id'];
			
				foreach ($metodo->Listxid($id) as $a) {
					
				

			 ?>

			 <input type="text" hidden="" name="id" value="<?php echo $a['id']?>">
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="name"  class="form-control" id="input1" value="<?php echo $a['nombre'] ?>" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Edad</label>
			    <div class="col-sm-10">
			      <input type="text" name="edad"  class="form-control" id="input1" placeholder="Last Name" / value="<?php echo $a['edad'] ?>">
			    </div>
			</div>

<?php } ?>
			
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Actualizar" />
		</form>


	</div>
<a href="index.php">Cancelar</a>
</div>


</body>
</html>