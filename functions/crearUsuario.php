 <?php 
require_once "../Data/conn.php";
require_once "functions.php";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$cargo=$_POST['cargo'];
$sueldo=$_POST['sueldo'];
$fecha_contratacion=$_POST['fecha_contratacion'];

	$data=array(
			$nombre,
			$apellido,
			$fecha_nacimiento,
			$cargo,
			$sueldo,
			$fecha_contratacion
				);

$obj= new Methods();
	if($obj->insertData($data)==5){
		header("location:../index.php");
		echo "Succesfully Submitted";
	}else{
		echo "Failed to Submit";
	}

 ?>