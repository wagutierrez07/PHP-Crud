
<?php 

	class Methods{
		public function readData($sql){
			$c= new connect();
			$conex=$c->connection();

			$result=mysqli_query($conex,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertData($data){
			$c= new connect();
			$conex=$c->connection();

			$sql="INSERT into empleado (nombre, apellido, fecha_nacimiento, cargo, sueldo, fecha_contratacion)
							values ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

			return $result=mysqli_query($conex,$sql);
		}
		public function updateData($data)
		{
			$c= new connect();
			$conex=$c->connection();

			$sql="UPDATE empleado SET nombre='$data[0]', apellido='$data[1]', fecha_nacimiento='$data[2]',cargo='$data[3]',sueldo='$data[4]',fecha_contratacion='$data[5]'
								where id='$data[6]'";
			return $result=mysqli_query($conex,$sql);
		}
		public function deleteData($id)
		{
			$c= new connect();
			$conex=$c->connection();

			$sql="DELETE FROM empleado where id='$id'";
			return $result=mysqli_query($conex,$sql);
		}
	}
 ?>