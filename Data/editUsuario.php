<?php 

require_once 'conn.php';
$obj= new connect();
$conector=$obj->connection();
$id=$_GET['id'];
$sql="SELECT * FROM empleado WHERE id='$id'";
$result=mysqli_query($conector,$sql);
$list=mysqli_fetch_row($result);
 ?>

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
		<form action="../functions/editarUsuario.php" method="post">
			<input type="text" hidden="" value="<?php echo $id?>" name="id">
			<label>Ingrese un nombre</label>
			<input type="text" value="<?php echo $list[1] ?>" name="nombre">
			<br>
			<label>Ingrese un apellido</label>
			<input type="text" value="<?php echo $list[2] ?>" name="apellido">
			<br>
			<label>Fecha de nacimiento</label>
			<input type="date" value="<?php echo $list[3] ?>" name="fecha_nacimiento">
			<br>
			<label>Ingrese un cargo</label>
			<input type="text" value="<?php echo $list[4] ?>" name="cargo">
			<br>
			<label>Ingrese el sueldo</label>
			<input type="text" value="<?php echo $list[5] ?>" name="sueldo">
			<br>
			<label>Fecha de contratacion</label>
			<input type="date" value="<?php echo $list[6] ?>" name="fecha_contratacion">

			<br>
			<button class="btn btn-success">Editar</button>	
		</form>
	</div>
</center>	
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>