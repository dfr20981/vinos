function format ( data ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
    '<tr>'+
    '<td>Descripcion:</td>'+
    '<td>'+data.descr+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>CEPA:</td>'+
    '<td>'+data.cepa+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>Cata:</td>'+
    '<td>'+data.cata+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>Fermentacion:</td>'+
    '<td>'+data.fermentacion+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>Alcohol:</td>'+
    '<td>'+data.alcohol+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>Temperatura:</td>'+
    '<td>'+data.temperatura+'</td>'+
    '</tr>'+
    '<tr>'+
    '<td>Barrica:</td>'+
    '<td>'+data.barrica+'</td>'+
    '</tr>'+
    '</table>';
  }

  var vecInventario=[];
  var lytInventario;
  var id_prove;

  window.onload = function() {
    id_prove=$('#nameProv').attr('id_prove');
    //console.log(id_prove);
    let h=$(window).height();
    //console.log(h);
    var height=(h*1)-326;
    lytInventario= $('#Tb_Inventario').DataTable({
     scrollY:height,
     scrollX: true,
     info:false,
     paging:false,
     orderCellsTop:true,
     language:{
      url:"//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json"
    },
    data:vecInventario,
    columns:[ {
     "searchable": false,
     "className":      'details-control',
     "orderable":      false,
     "data":           null,
     "defaultContent": '',
     "targets": 0
   },
   {data:null,render:function(data,type,row,meta){return meta.row+1}},
   {data:null,render:function(data,type,row,meta){return '<img src="'+data.img+'" class="imagenTabla"  />'}},
   {data:null,render:function(data,type,row,meta){return  '<p  class="pTabla">'+data.nombre+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<p  class="pTabla">'+data.nacimiento+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<p  class="pTabla">'+data.best_friend+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<p  class="pTabla">'+data.presentacion+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<p  class="pTabla">'+data.precio+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<p  class="pTabla">'+data.unidades+'</p>'}},
   {data:null,render:function(data,type,row,meta){return '<button id_prod="'+data.id+'" onclick="fn_editProd(this)" type="button" class="btn btn-light"  id="btneliminar"  data-toggle="modal" data-target="#modalEditPro" ><img src="./img/edit.png" class="imglapiz"></button>'}},
   {data:null,render:function(data,type,row,meta){return '<button id_prod="'+data.id+'" onclick="fn_openPro(this)" type="button" class="btn btn-light" id="btneliminar"  ><img src="./img/basura.png" class="imgbasura"></button>'}}
   ],
   dom:'<"toolsBarInv">frtip'
     // "order": [[ 1, 'asc' ]]
   });


    $('input.col_filInventario').on('keyup click',function(){
     fn_filCol('Tb_Inventario',$(this).parents('th').attr('data-column'),'Inventario');
   })
    fn_CatchInv();
    $('#Tb_Inventario tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = lytInventario.row( tr );

      if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
          }
          else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
          }
        }); 

    fn_btnToolsBarInv('.toolsBarInv');
  }

  async function fn_btnToolsBarInv(cla){
    while(!$(cla).length){
      await sleep(2);
    }

    $(cla).empty();
    let html=`<div class="blockBtns blockBtns2">
    <button type="button" class="btn btn-dark btn-add" data-toggle="modal" data-target="#modalAddPro" style="margin-bottom: 2px;">
    Agregar nuevo producto&nbsp&nbsp<img src="img/plus.png" width="20" height="20">
    </button>
    </div>`;

    $(cla).append(html);            
  }


  function fn_filCol(id,i,table) {
    $('#'+id).DataTable().column(i).search(
      $('#col'+i+'_'+table).val(),false,true
      ).draw();
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



  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }