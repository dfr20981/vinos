var id_prove;
window.onload = function() {
	fn_tams();
	fn_viewProvee();
  fn_cliUpdImagen();
  $('[data-toggle="tooltip"]').tooltip();
  efectModal();
};


function fn_cliUpdImagen(){
  $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        console.log(files);
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

 $(".uploadedit").on('click', function() {
        var formData = new FormData();
        var files = $('#imagedit')[0].files[0];
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

}



function fn_tams(){
	let l=$(window).height();
	//console.log(l);
	$("#sec1").height((0.128205128*l)-23.85);
	$("#sec2").height((0.737179487*l)+67.88);
	$("#sec3").height((0.137820513*l)-47.13);
  $("#lg_arb").height((0.125*l)-38.75);
  $("#lg_labuenacopa").height((0.125*l)-38.75);
  $("#text3").css("font-size",(0.044871795*l)-5.35);
}

function fn_msgAlertError(obj){
   console.log(((obj.tipo=='W')?"Alerta:":"Error:"),obj.msg);
}

function fn_listProv(){
  $("#mas_proveedor").removeClass("mas_proveedorH").addClass("mas_proveedor");
  fn_viewProvee();
}



function fn_tarjetProvee(vec){
	console.log(vec);
	let l=$("#sec2").height();
	let w=$("#sec2").width();

	let tam=vec.length;
	$("#tarjetProve").empty();
	let html=`<div class="row">`;
	let fil=6;
	for(let f=0;f<tam;f++){
		let row=vec[f];
		html=html
			+`<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
				<div id="card_`+row.id_p+`"  class="card" style="width:100%;">
				  <img src="`+row.logo+`" class="card-img-top" alt="">
				  <div class="card-body">
				    <h5 class="card-title">`+row.nom+`</h5>
				    <p class="card-text">`+row.descr+`</p>
				  </div>
				  <ul class="list-group list-group-flush">
            `+((row.tops.length>0)
              ? `<li class="list-group-item" style="padding: 0px;">
                <table style="width: 90%; margin-left: 5%;">
                  <tr>
                    <td>1</td>
                    <td><span>`+row.tops[0].nom+`</span></td>
                    <td style="text-align: center; width: 30%;">
                    <img src="`+row.tops[0].img+`" class="" style="width:30%;" alt="">
                  </td>
                  </tr>
                </table>
              </li>
              <li class="list-group-item" style="padding: 0px;">
                <table style="width: 90%; margin-left: 5%;">
                  <tr>
                    <td>2</td>
                    <td><span>`+row.tops[1].nom+`</span></td>
                    <td style="text-align: center; width: 30%;">
                    <img src="`+row.tops[1].img+`" class="" style="width:30%;" alt="">
                  </td>
                  </tr>
                </table>
              </li>
              <li class="list-group-item" style="padding: 0px;">
                <table style="width: 90%; margin-left: 5%;">
                  <tr>
                    <td>3</td>
                    <td><span>`+row.tops[2].nom+`</span></td>
                    <td style="text-align: center; width: 30%;">
                    <img src="`+row.tops[2].img+`" class="" style="width:30%;" alt="">
                  </td>
                  </tr>
                </table>
              </li>`
              :``)
            +`
				  </ul>
				  <div class="card-body">
				    <button type="button" id_p="`+row.id_p+`" nom_p="`+row.nom+`" logo_p="`+row.logo+`" class="btn btn-info" onclick="fn_inventarioView(this)">Inventario</button>
				  </div>
				</div>
			  </div>
			`;
		fil=fil-1;	
		if(fil==0){
			html=html+`</div><div class="row">`;
			fil=6;
		}

	}
	html=html+`</div>`;
	$("#tarjetProve").append(html);
}


var tab_inv;
function fn_inventario(vec){
	$("#tarjetProve").empty();
  $("#mas_proveedor").removeClass("mas_proveedor").addClass("mas_proveedorH");

	let html=`<table id="tab_inv" class="display compact" style="width:100%">
                <thead>
                    <tr>
                        <th class="btn-info centerTD">#</th>
                        <th class="btn-info centerTD">Imgen</th>
                        <th class="btn-info centerTD">Nombre</th>
                        <th class="btn-info centerTD">Nacimiento</th>
                        <th class="btn-info centerTD">Unidades</th>
                        <th class="btn-info centerTD">Presentación</th>
                        <th class="btn-info centerTD">Precio</th>
                        <th class="btn-info centerTD">Editar</th>
                    </tr>
                    <tr>
                      <th style="text-align: center;">
                         <img title="Filtros" class="imgTab1" src="./img/filter.png">
                      </th>
                      <th style="text-align: center;" data-column="1"></th>
                      <th style="text-align: center;" data-column="2">
                          <input type="text" class="col_filinv form-control form-control-sm" placeholder="" id="col2_inv">
                      </th>
                      <th style="text-align: center;" data-column="3"></th>
                      <th style="text-align: center;" data-column="4"></th>
                      <th style="text-align: center;" data-column="5"></th>
                      <th></th><th></th>
                    </tr>  
                </thead>
                <tbody></tbody>  
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>`;

    $("#tarjetProve").append(html);
    configTabInvet(vec);
}

 function configTabInvet(vec){
	//console.log(vec);
  let h=$(window).height();
  console.log(h);
  var height=(h*0.737179487)-52.12;
	tab_inv=$('#tab_inv').DataTable({
        scrollY:height,
        deferRender: true, /*Velocidad de procedemiento tabla */
        data: vec,
        info:     false,
        orderCellsTop: true,
        //searching: false,
        //columnDefs: [ {"visible": false,"targets":vecColCot}],
        columns: [
          { data: null,render: function ( data, type, row, meta ) {
              return '<span class="textTb1">'+(meta.row+1)+'</span>';
            } 
          },
          { data: null,render: function ( data, type, row, meta ) {
              return '<img src="'+data.img+'" class="imgTab2" clave="" >';
            } 
          },
          { data: null,render: function ( data, type, row, meta ) {
                    return '<span class="textTb1">'+data.nombre+'</span>';
              } 
          },
          
          { data: null,render: function ( data, type, row, meta ) {
                    return '<span class="textTb1">'+data.nacimiento+'</span>';
              } 
          },
          { data: null,render: function ( data, type, row, meta ) {
                    return '<span class="textTb1">'+data.unidades+'</span>';
              } 
          },
          { data: null,render: function ( data, type, row, meta ) {
                    return '<span class="textTb1">'+data.presentacion+'</span>';
              } 
          },
          { data: null,render: function ( data, type, row, meta ) {
                    return '<span class="textTb1">'+data.precio+'</span>';
              } 
          },
          
          { data: null,render: function ( data, type, row, meta ) {
              return ' <img src="./img/editar.png" class="imgTab3" clave="'+data.id+'" id_p="'+data.id_p+'" onclick="fn_openEditModal(this)" >';
            } 
          }
        ],
        paging: false,
        dom:'<"toolsBar">frtip',
        language: {
          url: "//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
        },createdRow: function (row, data, index) {
                 $('td', row).eq(0).addClass('centerTD');
                 $('td', row).eq(1).addClass('centerTD');
                 $('td', row).eq(2).addClass('leftTD');
                 $('td', row).eq(3).addClass('centerTD');
                 $('td', row).eq(4).addClass('centerTD');
                 $('td', row).eq(5).addClass('centerTD');
                 $('td', row).eq(6).addClass('centerTD');
                 $('td', row).eq(7).addClass('centerTD');
        }
      });
}



function fn_newProveedor(){
  $("#mdl_newPro").modal("show");
}


function fn_llenarFormProveDir(obj){
  //console.log(obj);
  $("#mdlFrm_colPrv").val("");
  $("#mdlFrm_colPrv").autocomplete({
      appendTo: "#mdl_newPro"
      ,source: obj.col
      ,minLength:1
      ,messages: {noResults: '',results: function() {}}
      ,select: function (event, ui) {
         console.log(ui.item);  
      }
  });
  $("#mdlFrm_delPrv").val(obj.muni);
  $("#mdlFrm_estPrv").val(obj.estd);
  $("#mdlFrm_paisPrv").val(obj.pais);
}



function efectModal(){
  $('#mdl_newPro').on('hidden.bs.modal', function (e) {
     $( "#mdlFrm_colPrv" ).autocomplete( "destroy" );
  });
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
