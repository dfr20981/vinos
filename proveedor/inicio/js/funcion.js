  function fn_CatchInv(){
    let jsn={"op":"R","id":id_prove,"read_pro":0};
    console.log(jsn);
    var obj={ind:2,obj:JSON.stringify(jsn)};
    $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax

        load();
      },

       success:function(msg){   //Respuesta y conexion correcta
         // console.log(msg);
         let vec=JSON.parse('['+msg+']');
         console.log(vec);
         lytInventario.clear().draw();
         lytInventario.rows.add(vec).draw();
         lytInventario.columns.adjust().draw();
          // $("#cargando").hide();
        },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
  }


  function fn_editProd(id){
    let id_prod=$(id).attr("id_prod");
    let jsn={"op":"R","id":id_prove,"id_prod":id_prod,"read_pro":1};
    console.log(jsn);
    var obj={ind:2,obj:JSON.stringify(jsn)};
    console.log($(id).attr("id_prod"));
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
        $("#editNombreBf").val(obj.best_friend);
        $("#editUnidades").val(obj.unidades);



        $("#tMEditProduc").text("Editar "+obj.nombre);
        
      },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });

  }

  function fn_updateProd (){
    $("#modalEditPro").modal("hide");
    let jsn={"op":"U","id":id_prove,"id_prod": $("#tMEditProduc").attr("id_prod"),"read_pro":1,


    "nombre": $("#editNombre").val(),"img": $("#editImg").attr("src"),
    "fermentacion": $("#editFermentacion").val(), "alcohol": $("#editAlcohol").val(),
    "temperatura": $("#editTemperatura").val(),"descr": $("#editDescripcion").val(),
    "cepa": $("#editCepa").val(),"nacimiento": $("#editNacimiento").val(),
    "barrica": $("#editBarrica").val(),"presentacion": $("#editPresentacion").val(),
    "precio": $("#editPrecio").val(),"cata": $("#editCata").val(),"best_friend": $("#editNombreBf").val(),"unidades": $("#editUnidades").val()}
    console.log(jsn);

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
         lytInventario.clear().draw();
         lytInventario.rows.add(vec).draw();
         lytInventario.columns.adjust().draw();



       },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });
    

  }

  function fn_addProd (){

   $("#modalAddPro").modal("hide");
   let jsn={"op":"C","id":id_prove,"read_pro":1,"nombre": $("#addNombre").val(),"img": $("#addImg").attr("src"),
   "fermentacion": $("#addFermentacion").val(), "alcohol": $("#addAlcohol").val(),
   "temperatura": $("#addTemperatura").val(),"descr": $("#addDescripcion").val(),
   "cepa": $("#addCepa").val(),"nacimiento": $("#addNacimiento").val(),
   "barrica": $("#addBarrica").val(),"presentacion": $("#addPresentacion").val(),
   "precio": $("#addPrecio").val(),"cata": $("#addCata").val(),"best_friend": $("#addNombreBf").val(),"unidades": $("#addUnidades").val()}
   console.log(jsn);

   var obj={ind:2,obj:JSON.stringify(jsn)};
   $.ajax({
     data:obj,
     url:"../back/control.php",
     type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax

        load();

      },
      success:function(msg){ 
       console.log(msg);  //Respuesta y conexion correcta
       let vec=JSON.parse('['+msg+']');
       console.log(vec);
       lytInventario.clear().draw();
       lytInventario.rows.add(vec).draw();
       lytInventario.columns.adjust().draw();
       

     },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    });


 }

 function load(){
  setTimeout(() => { 
    $("#load").show().fadeOut("slow"); }, 2000);

}

function fn_delProd(id){
 $("#modalDelPro").modal("hide");
 let jsn={"op":"D","id":id_prove,"id_prod": $(id).attr("id_prod")}
 console.log(jsn);


 var obj={ind:2,obj:JSON.stringify(jsn)};
 $.ajax({
   data:obj,
   url:"../back/control.php",
   type:"POST",
       beforeSend:function(){   //nte de que se ejecute el ajax

        load();

      },
      success:function(msg){ 
       console.log(msg);  //Respuesta y conexion correcta
       let vec=JSON.parse('['+msg+']');
       console.log(vec);
       lytInventario.clear().draw();
       lytInventario.rows.add(vec).draw();
       lytInventario.columns.adjust().draw();
       

     },
       error:function(request,status,error){ //Si pasa algo malo
        console.log("Algo salio mal");
      }
    }); 



}

function fn_openPro(id){

  $("#modalDelPro").modal('show');
  $("#btndelG").attr('id_prod',$(id).attr('id_prod'));
}