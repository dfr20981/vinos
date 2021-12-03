/****************************PROVEEDOR********************************************************************************************************************************************************/
    function fn_listProvee(){
    	var obj={"ind":1,"obj":JSON.stringify({"op":"R","select":2})};
    	//console.log(obj);
    	$.ajax({
            data:obj,
            url:"./back/control.php",
            type:'post',
            beforeSend:function(){/*showLoad();*/},
            success:function(res){
                console.log(res);
                let ok=true;
                try{
                   var obj=JSON.parse(res);
                }catch(e) {
                  ok=false;
                  console.log(e,res);
                  msg_aviso({op:0,msg:"Error en la ocnsulta revisar con Soporte. No actualizar la pagina"});
                }
                if(ok){
                  if(obj.error){
                    console.log("Error",obj.msg);
                  }else{
                    fn_proveedores(obj.vec);
                  }
                }
            },  
            error: function (request, status, error) {
                console.log(request.responseText);
            },
        });  
    }
/****************************\PROVEEDOR********************************************************************************************************************************************************/    