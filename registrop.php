<?php
		include("conexion.php");

		
			$Cedulap=$_REQUEST['Cedulap'];
			$Nombrep=$_REQUEST['Nombrep'];
			$Apellidop=$_REQUEST['Apellidop'];
			$Telefonop=$_REQUEST['Telefonop'];
			$Emailp=$_REQUEST['Emailp'];
			$Tipo_usuariop=$_REQUEST['Tipo_usuariop'];
			$Contraseñap=$_REQUEST['Contraseñap'];
			$query="INSERT INTO `usuario` (`cedula`, `nombre`, `apellido`, `telefono`, `email`, `tipo_usuario_id`, `clave`) VALUES ('$Cedulap','$Nombrep','$Apellidop','$Telefonop','$Emailp','$Tipo_usuariop','$Contraseñap')";
			$dato=mysqli_query($con,$query);

			if($dato){
				header('location:ingreso.html')
			}else{
				echo "no se insertaron los datos";
			}

?>