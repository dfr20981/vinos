
function fn_viewProvee(){
	let info={"op":"R","select":2};
	let data={"ind":1,"obj":JSON.stringify(info)};
	 $.ajax({
          data:data,
          url:"../back/control.php",
          type:'post',
          beforeSend:function(){  },
          success:function(msg){
           //console.log(msg);
            let obj={};
            let ok=true;
            try{
            	obj=JSON.parse(msg)
            }catch(error){
            	ok=false;
              console.log(msg);
            }
            if(ok){
            	if(!obj.error){
            		fn_tarjetProvee(obj.vec);
            	}else{
            		fn_msgAlertError({"msg":obj.msg,"tipo":"E"});
            	}
            }
          },
          error: function (request, status, error) {
                console.log(request.responseText);
          },
      });
}

function fn_inventarioView(id){
  let id_p=$(id).attr("id_p");
  //console.log(id_p);
  let info={"op":"R","read_pro":0,"id":id_p};
  let data={"ind":2,"obj":JSON.stringify(info)};
  $.ajax({
          data:data,
          url:"../back/control.php",
          type:'post',
          beforeSend:function(){  },
          success:function(msg){
            console.log(msg);
            let vec=[];
            let ok=true;
            try{
              vec=JSON.parse('['+msg+']')
            }catch(error){
              ok=false;
            }
            if(ok){
              id_prove=id_p;
              fn_inventario(vec);
            }
          },
          error: function (request, status, error) {
                console.log(request.responseText);
          },
  });
}


function fn_openEditModal(id){
  let id_prod=$(id).attr("clave");
    let jsn={"op":"R","id":id_prove,"id_prod":id_prod,"read_pro":1};
    console.log(jsn);
    var obj={ind:2,obj:JSON.stringify(jsn)};
    console.log(obj);
    $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax
       },
       success:function(msg){   //Respuesta y conexion correcta
        let obj=JSON.parse(msg);
        console.log(obj);
        $("#tMEditProduc").attr("id_prod",id_prod);
        $("#editNombre").val(obj.nombre);
        $("#editImg").attr("src",obj.img);
        $("#editFermentacion").val(obj.fermentacion);
        $("#editAlcohol").val(obj.alcohol);
        $("#editTemperatura").val(obj.temperatura);
        $("#editDescripcion").val(obj.descr);
        $("#editCepa").val(obj.cepa);
        $("#editNacimiento").val(obj.nacimiento);
        $("#editBarrica").val(obj.barrica);
        $("#editPresentacion").val(obj.presentacion);
        $("#editPrecio").val(obj.precio);
        $("#editCata").val(obj.cata);
        $("#tMEditProduc").text("Editar "+obj.nombre);
        $("#modalEditPro").modal("show");
      },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
    /**/
}

function fn_updateProd (){
    $("#modalEditPro").modal("hide");
    let jsn={"op":"U","id":id_prove,"id_prod": $("#tMEditProduc").attr("id_prod"),"read_pro":1,
          "nombre": $("#editNombre").val(),"img": $("#editImg").attr("src"),
          "fermentacion": $("#editFermentacion").val(), "alcohol": $("#editAlcohol").val(),
          "temperatura": $("#editTemperatura").val(),"descr": $("#editDescripcion").val(),
          "cepa": $("#editCepa").val(),"nacimiento": $("#editNacimiento").val(),
          "barrica": $("#editBarrica").val(),"presentacion": $("#editPresentacion").val(),
          "precio": $("#editPrecio").val(),"cata": $("#editCata").val()};
    //console.log(jsn);

    var obj={ind:2,obj:JSON.stringify(jsn)};
    $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax
        $("#load").show().fadeOut("slow");
      },
       success:function(msg){   //Respuesta y conexion correcta
         let vec=JSON.parse('['+msg+']');
         console.log(vec);
         tab_inv.clear().draw();
         tab_inv.rows.add(vec).draw();
         tab_inv.columns.adjust().draw();
       },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
}


function fn_cpllenar(){
	//console.log("hola");
    let cp=$("#mdlFrm_nCPPrv").val();
    if(cp!=''){
      var obj={"ind":3,"cp":cp};
      $.ajax({
       data:obj,
       url:"../back/control.php",
       type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax

       },
       success:function(msg){   //Respuesta y conexion correcta
          //console.log(msg);
          let obj={};
          let ok=true;
          try{
            obj=JSON.parse(msg)
          }catch(error){
            ok=false;
          }
          if(ok){
            fn_llenarFormProveDir(obj.obj);
          }

       },
       error:function(request,status,error){ //Si pasa algo malo
          console.log("Algo salio mal");
       }
      });
    }
}


function fn_newProveedorBD(){
  let jsn={"op":"C","nom_p":$("#mdlFrm_nomPrv").val(),"web_p":$("#mdlFrm_pagePrv").val()
          ,"tel_p":$("#mdlFrm_telPrv").val(),"descr_p":$("#mdlFrm_descPrv").val(),"calle":$("#mdlFrm_callePrv").val(),"n_int":$("#mdlFrm_nIntPrv").val()
          ,"n_ext":$("#mdlFrm_nExtPrv").val(),"cp":$("#mdlFrm_nCPPrv").val(),"col":$("#mdlFrm_colPrv").val(),"del":$("#mdlFrm_delPrv").val()
          ,"est_d":$("#mdlFrm_estPrv").val(),"pais":$("#mdlFrm_paisPrv").val(),"lat":$("#mdlFrm_latPrv").val(),"long":$("#mdlFrm_longPrv").val()
          ,"nom_u":$("#mdlFrm_nomPrv").val(),"correo":$("#mdlFrm_emailPrv").val(),"pass":$("#mdlFrm_passPrv").val(),"tipo":"P"
          ,"logo":""
        };
  if(jsn.nom_p=='' || jsn.calle=='' || jsn.n_ext=='' || jsn.cp=='' || jsn.lat=='' || jsn.long=='' || jsn.correo=='' || jsn.pass==''){
    console.log("Revisa que se tiene todos los datos obligatoriso");
  }else{
    var obj={ind:1,obj:JSON.stringify(jsn)};
    $.ajax({
      data:obj,
      url:"../back/control.php",
      type:"POST",
      beforeSend:function(){   //nte de que se ejecute el ajax

      },
      success:function(msg){   //Respuesta y conexion correcta
        console.log(msg);
      },
      error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
    console.log(jsn);
    $("#mdl_newPro").modal("hide");
  }


}
