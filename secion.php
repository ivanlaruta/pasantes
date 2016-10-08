<?php
		$opcion = filter_var($_POST['opcion'],FILTER_SANITIZE_STRING);
  	require_once("class_usuario.php");
	//esto es una modificacion
		include("databaseA.php");
  	session_start();

	switch ($opcion) {
		
 
		case "inicio_sesion":
		  	$key = 'catolica';
			$a = filter_var($_POST['inputCi'],FILTER_SANITIZE_NUMBER_INT);
			$cad = filter_var($_POST['inputPassword'],FILTER_SANITIZE_STRING);
			//$pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cad, MCRYPT_MODE_CBC, md5(md5($key))));
			//bucamos al usuario registrado
			$sql = "select idUsuario ,nombre, apellido,idTipo_usuario from usuario where ci = '$a' and contrasena = '$cad'";
			$result= execSqlA($sql);
			$resultados=array();
			$data = mysqli_fetch_array($result);

			if($data > 0)
			{
				$resultados = array('ideu' => $data[0] ,'nom' => $data[1],'ape' => $data[2],'p' => $data[3],'res'=> 1);

				
				$_SESSION['id_usu'] = $data[0];
				$_SESSION['nombre'] = $data[1];
				$_SESSION['apellido'] = $data[2];
				$_SESSION['permiso'] = $data[3];
			    
			}
			else
			{
			  	$resultados=array('res'=> 0 );	
			}
			echo json_encode($resultados);






			flush();
		break;
		case 'cierra_sesion':  			
			session_destroy();
			$resultados = array('res'=> 1);  
			echo json_encode($resultados);
  		break;

	}
	
?> 
