window.onload = function() {//Se activa al momento de que cargue la pagina.
   fn_infoProveedor();

}

function fn_datosProveedor(obj){
    console.log(obj);
    $("#editImg").attr("src",obj.logo);
    $("#exampleInputEmail1").val(obj.nom);
    $("#nameProv").text(obj.nom);
    $("#logo_prove1").attr("src",obj.logo);
    $("#exampleInputPassword1").val("123123");
    $("#exampleInputPassword2").val("123123");
}

function fn_saveDatosCuenta(op){
    if(op==0){//GUARDAR DATOS PROVEEDOR
        if($("#exampleInputEmail1").val()==''){
            console.log("No se puede guardar si esta vacio el Nombre");
        }else{
           let id_prove=$("#nameProv").attr("id_prove"); 
           let obj={"op":"U","logo":$("#editImg").attr("src"),"nom":$("#exampleInputEmail1").val(),"ind":0,"id_prove":id_prove};
           fn_saveInfoProveedor(obj);
        }
    }else{//GUARDAR CONTRASEÑA NUEVA
        if($("#exampleInputPassword1").val()=='' || $("#exampleInputPassword2").val()=='') {
            console.log("No se puede guardar si esta vacia la contraseña");
        }else{
            if($("#exampleInputPassword1").val()!=$("#exampleInputPassword2").val()) {
                console.log("Revise su contraseña");
            }else{
               let obj={"op":"U","pass":$("#exampleInputPassword1").val(),"ind":0,"id_use":$("#log_user").attr("id_use")};
               fn_saveInfoPassword(obj);
            }   
        }
    }
}



$(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'recepcion.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
                } else {
          alert('Formato de imagen incorrecto.');
        }
            }
        });
    return false;
});