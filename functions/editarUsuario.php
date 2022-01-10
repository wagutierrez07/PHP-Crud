 <?php 
require_once "../Data/conn.php";
require_once "functions.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$cargo=$_POST['cargo'];
$sueldo=$_POST['sueldo'];
$fecha_contratacion=$_POST['fecha_contratacion'];
$id=$_POST['id'];


	$data=array(
			$nombre,
			$apellido,
			$fecha_nacimiento,
			$cargo,
			$sueldo,
			$fecha_contratacion,
			$id
				);

$obj= new Methods();
	if($obj->updateData($data)==5){
		header("location:../index.php");
		echo "Succesfully Submitted";
	}else{
		echo "Failed to Submit";
	}

 ?>	