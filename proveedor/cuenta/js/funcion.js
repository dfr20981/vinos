
function fn_infoProveedor(){
	let id_prove=$("#nameProv").attr("id_prove");
	let jsn={"op":"R","id":id_prove,"select":1};// select=1 Le solo un proveedor  select=0 Le todos los proveedores 
	console.log(jsn);
    var obj={ind:1,obj:JSON.stringify(jsn)};

    $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){ },
       success:function(msg){   //Respuesta y conexion correcta
          	//console.log(msg);
          	let ok=true;
            try{
               var obj=JSON.parse(msg);
            }catch(e) {
              ok=false;
              console.log(e,msg);
            }
            if(ok){
              	if(obj.error){
                 console.log("Error:"+obj.msg);
            	}else{
               		//console.log(obj);
               		fn_datosProveedor(obj.vec[0]);
            	}
            }	
       },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });

}

function fn_saveInfoProveedor(jsn){
	console.log(jsn);
	var obj={ind:1,obj:JSON.stringify(jsn)};
    $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){ },
       success:function(msg){   //Respuesta y conexion correcta
          	console.log(msg);
          	let ok=true;
            try{
               var obj=JSON.parse(msg);
            }catch(e) {
              ok=false;
              console.log(e,msg);
            }
            if(ok){
              	if(obj.error){
                 console.log("Error:"+obj.msg);
            	}else{
               		//console.log(obj);
               		fn_datosProveedor(obj.vec[0]);
            	}
            }
       },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
}

function fn_saveInfoPassword(jsn){
	console.log(jsn);
	var obj={ind:3,obj:JSON.stringify(jsn)};
	$.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){ },
       success:function(msg){   //Respuesta y conexion correcta
          	console.log(msg);
          	$("#exampleInputPassword1").val("123123");
    		$("#exampleInputPassword2").val("123123");
       },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
    
}