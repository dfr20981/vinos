<?php
	session_start(); // Iniciando sesion
	require_once '../db/conex.php';

	$msgConexion="";
	$mail=$_POST["inp_emailMdlBienv"]; 
	$pass=$_POST["inp_passMdlBienv"];

	$conn =Conexion::con();//clase Conexion funtion con()
	if( $conn ){
		$db = mysqli_select_db( $conn, 'vino') or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
		$msgConexion= "Conexión establecida.<br />";

	   	$query="CALL sp_autoUser('{\"correo\":\"".$mail."\",\"pass\":\"".$pass."\"}');";
	   	
	   	echo  $query;
	   		   		
		$res =  mysqli_query($conn, $query)  or die ( "Algo ha ido mal en la consulta a la base de datos");

		while ($columna = mysqli_fetch_array( $res )){
			$json=utf8_encode($columna['RES']) ;
		}
		echo  utf8_decode($json);

		$json=utf8_decode($json);
		
		mysqli_close($conn);

		$obj = json_decode($json);


		if($obj->{'error'}==false){
			#$sec=$obj->msg->sec;
			$_SESSION['json']=$obj->obj; // JSON DATOS
			$_SESSION['token']=$obj->token; // TOKEN DE ACCESO
			if (isset($obj->obj->prove)){
				$_SESSION['tipo']='P'; // TOKEN DE ACCESO
			}else{
				$_SESSION['tipo']='C'; // TOKEN DE ACCESO
			} 
			
			$_SESSION['auto']=0; // AUTORIZO

		}else{
			$_SESSION['json']=''; // JSON DATOS
			$_SESSION['token']=''; // TOKEN DE ACCESO
			$_SESSION['tipo']=''; // TOKEN DE ACCESO
			$_SESSION['auto']=1; // AUTORIZO
		}
	}else{
		$_SESSION['json']=''; // JSON DATOS
		$_SESSION['token']=''; // TOKEN DE ACCESO
		$_SESSION['tipo']=''; // TOKEN DE ACCESO
		$_SESSION['auto']=2; // AUTORIZO
		echo '{"error":true,"msg":"'.$msgConexion.'"}';
		
	    mysqli_close($conn);
	}	

	header("Location: ../../inicio/inicio.php");
	//echo "que onda".$mail.$pass." !!";
?>