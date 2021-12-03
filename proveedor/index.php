<?php
	session_start();
    require_once 'back/db/conex.php';
    if(isset($_SESSION["token"])){
    	if(isset($_SESSION["tipo"])){
    		$tipo=$_SESSION["tipo"]; 
    		if($tipo=='P'){
    			$msgConexion="";
				$token=$_SESSION["token"]; 
			
				$conn =Conexion::con();//clase Conexion funtion con()
				if( $conn ){
					$db = mysqli_select_db( $conn, 'vino') or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
					$msgConexion= "Conexión establecida.<br />";

				   	$query="CALL sp_autoToken('{\"token\":\"".$token."\"}');";
				   	
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
						header("Location: /labuenacopa/proveedor/inicio/inicio.php");
					}else{
						$_SESSION['json']=''; // JSON DATOS
						$_SESSION['token']=''; // TOKEN DE ACCESO
						$_SESSION['tipo']=''; // TOKEN DE ACCESO
						$_SESSION['auto']=1; // AUTORIZO

						header("Location: /labuenacopa/inicio/");
					}
				}else{
					$_SESSION['json']=''; // JSON DATOS
					$_SESSION['token']=''; // TOKEN DE ACCESO
					$_SESSION['tipo']=''; // TOKEN DE ACCESO
					$_SESSION['auto']=2; // AUTORIZO
					//echo '{"error":true,"msg":"'.$msgConexion.'"}';
					mysqli_close($conn);

				    header("Location: /labuenacopa/inicio/");
				}
    		}else if($tipo=='C'){
    			header("Location: /labuenacopa/cliente/"); 
    		}else{
    			header("Location: /labuenacopa/inicio/");	
    		}
    	}else{
    		header("Location: /labuenacopa/inicio/");	
    	}	
	}else{
    	header("Location: /labuenacopa/inicio/");
    }
    exit();

 # echo "proveedor";
?>    
