<?php 
$id=$_GET['id'];
require_once "../Data/conn.php";
require_once "functions.php";
$obj= new Methods();
	if($obj->deleteData($id)==5){
		header("location:../index.php");
		echo "Succesfully Submitted";
	}else{
		echo "Failed to Submit";
	}
 ?>