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
		<h1 class="justify-center">CRUD PHP</h1>
		<form action="functions/crearUsuario.php" method="post">
			<label>Ingrese un nombre</label>
			<input type="text" name="nombre">
			<br>
			<label>Ingrese un apellido</label>
			<input type="text" name="apellido">
			<br>
			<label>Fecha de nacimiento</label>
			<input type="date" name="fecha_nacimiento">
			<br>
			<label>Ingrese un cargo</label>
			<input type="text" name="cargo">
			<br>
			<label>Ingrese el sueldo</label>
			<input type="text" name="sueldo">
			<br>
			<label>Fecha de contratacion</label>
			<input type="date" name="fecha_contratacion">

			<br>
			<button class="btn btn-success">Registrar</button>	
		</form>
	</div>
</center>	
</div>
<?php 
include_once 'data.php';
include_once 'Data/conn.php';
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>