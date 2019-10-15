<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in OOP PHP - Create</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
</head>
<body>
<div class="container">

	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="controllers/save.php">
			<h2>Create Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="name"  class="form-control" id="input1" placeholder="First Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Edad</label>
			    <div class="col-sm-10">
			      <input type="text" name="edad"  class="form-control" id="input1" placeholder="Last Name" />
			    </div>
			</div>

			
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>




<table class="table" 
data-toggle="table"
  data-pagination="true"
  data-search="true">

  <thead class="thead-dark">
    <tr>
      <th scope="col" data-sortable="true" data-field="id">#</th>
      <th scope="col" data-field="name">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	<?php require_once 'Models/Metodos.php'; 
  	 $c = new Metodos();

  	?>
  	<?php foreach($c->List() as $a){ ?>
    <tr>
    	<td><?php  echo $a['id']?></td>
    	<td><?php  echo $a['nombre']?></td>
    	<td><?php  echo $a['edad']?></td>
    	<td><button type="button" id="delete" ida='<?php echo $a['id']?>'>X</button>
			<a href="edit.php?id=<?php echo $a['id']?>">edit</a>
    	</td>
    	
      
    </tr>
	<?php } ?>
   </tbody>
  </table>

</div>

<script>

	$(document).ready(function(){

		$(document).on('click', '#delete', function(event) {
			event.preventDefault();
			var id = this.getAttribute("ida");
			var dato = {
				'id':id
			}
			//sdfj
			var conf = confirm("desea eliminar ?");
			if(conf){

				$.ajax({
				url: 'controllers/delete.php',
				type: 'POST',
				data: dato,
				success:function(rs){
					alert(rs);
					location.reload();

				}
			});

			}else{
				alert("cancelado");
			}

			
			
			
		});

	});
	
</script>
</body>
</html>