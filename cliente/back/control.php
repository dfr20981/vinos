<?php
	require_once 'db/dbExec.php';

	if($_POST['ind']==1){

   		$query="CALL sp_crudProveedor('".$_POST['obj']."');";
   		//echo $query;
   		$json=dbExec::exec($query);//clase read QueryExe
   		echo $json;
	
	}else if($_POST['ind']==2){//ESTE AUN NO SE USA USAR
		/*
   		$query="CALL sp_autoToken('".$_POST['obj']."');";
   		//echo $query;
   		$json=dbExec::exec($query);//clase read QueryExe
   		echo $json;
		*/
	}else{
		echo '{"error":true,"msg":"No se reconoce la opción que selecciono"}';
	}

?>