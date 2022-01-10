<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<center>
			<h2>Contenido</h2>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Fecha de nacimiento</th>
					<th>Cargo</th>
					<th>Sueldo</th>
					<th>Fecha de Contratacion</th>
					<th>Acciones</th>
				</tr>
				<?php
				require_once "Data/conn.php";
				require_once "functions/functions.php";
				$obj = new Methods();
				$sql="SELECT * FROM empleado";
				$data=$obj->readData($sql);
				foreach ($data as $key) {
				 ?>
				 	<tr>
					<td><?php echo $key['id']; ?></td>
					<td><?php echo $key['nombre']; ?></td>
					<td><?php echo $key['apellido']; ?></td>
					<td><?php echo $key['fecha_nacimiento']; ?></td>
					<td><?php echo $key['cargo']; ?></td>
					<td><?php echo $key['sueldo']; ?></td>
					<td><?php echo $key['fecha_contratacion']; ?></td>
					<td><a href="Data/editUsuario.php?id=<?php echo $key['id'] ?>">Update</a></td>
					<td><a href="functions/deleteUsuario.php?id=<?php echo $key['id'] ?>">Delete</a></td>
				</tr>
				<?php } ?>
			</table>

	</div>
</center>		
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>