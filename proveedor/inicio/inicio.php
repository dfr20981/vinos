<?php
session_start();
    //require_once("../back/db/dbExec.php");
if(!isset($_SESSION["token"])){
  header("Location: /labuenacopa/inicio");
  exit();
}else{
  $tipo=$_SESSION["tipo"]; 
  if($tipo==''){
    header("Location: /labuenacopa/inicio");
    exit();
  }else if($tipo=='C'){
    header("Location: /labuenacopa/cliente/");
    exit();
  }  
}
$obj=$_SESSION["json"];
?>    
<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

  <title>La buena copa</title>

  
</head>

<body>
  <div class="loader" id="load"></div>


  <!-- <div class="lds-roller" id="cargando"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> -->

  <!-- BARRA DE NAVEGACION////////////////////////////////////////////////////////////////////////////////////////// -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <?php
      echo '<img src="'.$obj->prove->logo.'" width="80" height="80" alt="" loading="lazy">'; 
      echo '<span id_prove="'.$obj->prove->id.'" id="nameProv">'.$obj->prove->nom.'</span>'; 

      ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" style="margin-right: 30px;">
        <li class="nav-item active">
          <a class="nav-link" href="../cuenta/cuenta.php"><img src="img/user2.png" width="40" height="40"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" onclick="">
          <a class="nav-link"  href="../back/registro/closeSesion.php" style="font-weight: bold;">           <button type="button" class="btn btn-dark">Salir</button>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- FIN DE BARRA DE NAVEGACION//////////////////////////////////////////////////////////////////////////////////////// -->
  <div class="container1">
    <table id="Tb_Inventario" class="stripe row-border order-column" style="width:100%">
      <thead>
        <tr id="trPrincipal">
          <th></th>
          <th></th>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>Nacimiento</th>
          <th>Mejor amigo</th>
          <th>Presentacion</th>
          <th>Precio</th>
          <th>Unidades</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th data-column="0" ><input class="col_filInventario" id="col0_Inventario" type="" name=""></th>
          <th data-column="1" ><input class="col_filInventario" id="col1_Inventario" type="" name=""></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

        </tr>
      </thead>
      <tbody>

      </tbody>
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
          <th></th>
          <th></th>
          <th></th> 

        </tr>
      </tfoot>
    </table>
  </div>

  <footer>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <!-- <img src="img/logo_la_buena_copa1.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy"> -->
        &nbsp&nbspLa&nbsp<span style="color: #8bb121;">buena&nbsp</span>copa
      </a>
    </nav>
  </footer>


  <!-- Modal AGEGRAR NUEVO PRPDUCTO -///////////////////////////////////////////////////////////////////////-->

  <div class="modal fade" id="modalAddPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
         <form class="was-validated" enctype="multipart/form-data" action="#" method="POST">
           <div class="form-group col-md-6" >
            <div class="card mb-3" style="max-width: 540px; border: none;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img class="card-img-top" src="images/default-avatar.png" id="addImg" width="80" height="150">
                </div>
                <div class="col-md-8">
                  <div class="card-body" >

                    <div class="form-group">
                      <div class="input-group is-invalid">
                        <div class="custom-file" lang="es">
                          <input type="file" class="custom-file-input" name="image" id="image" required>
                          <label class="custom-file-label" for="validatedInputGroupCustomFile"></label>

                        </div>
                        <div class="input-group-append">
                         <button class="btn btn-dark upload" value="Subir imagen" type="button">Subir</button>
                       </div>
                     </div>
                   </div>                  
                 </div>
               </div>
             </div>
           </div>
         </div> 
         <div class="form-row ">
          <div class="form-group col-md-4">
            <label for="addNombre">Nombre</label>
            <input type="text" class="form-control is-invalid" id="addNombre" placeholder="Requiere nombre" required>

          </div>
          <div class="form-group col-md-4">
            <label for="addFermentacion">Fermentacion</label>
            <input type="text" class="form-control is-invalid" id="addFermentacion" >
          </div>
          <div class="form-group col-md-2">
            <label for="addAlcohol">Alcohol</label>
            <div class="input-group mb-2 mr-sm-2">
             <input type="text" class="form-control is-invalid" id="addAlcohol">
             <div class="input-group-prepend">
              <div class="input-group-text">°</div>
            </div>
          </div>
        </div>
        <div class="form-group col-md-2">
          <label for="addTemperatura">Temperatura</label>
          <div class="input-group mb-2 mr-sm-2">
            <input type="text" class="form-control is-invalid" id="addTemperatura">
            <div class="input-group-prepend">
              <div class="input-group-text">°</div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
       <div class="form-group col-md-6">
        <label for="addDescripcion">Descripcion</label>
        <textarea class="form-control is-invalid" id="addDescripcion" rows="3" placeholder="Requiere nombre" required></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="addCepa">Cepa</label>
        <textarea class="form-control is-invalid" id="addCepa" rows="3"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="addNacimiento">Nacimiento</label>
        <input type="date" class="form-control is-invalid" id="addNacimiento" required>
      </div>
      <div class="form-group col-md-4">
        <label for="addBarrica">Barrica</label>
        <input type="text" class="form-control is-invalid" id="addBarrica">
      </div>
      <div class="form-group col-md-2">
        <label for="addPresentacion">Presentacion</label>
        <div class="input-group mb-2 mr-sm-2">
          <input type="text" class="form-control is-invalid" id="addPresentacion" placeholder="Requiere presentacion" required>
          <div class="input-group-prepend">
            <!-- select -->
            <div class="input-group-text">ml</div>
          </div>
        </div>
      </div>
      <div class="form-group col-md-2">
        <label for="addPrecio">Precio</label>
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">$</div>
          </div>
          <input type="number" class="form-control is-invalid" id="addPrecio" placeholder="Requiere precio" required>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="addNombreBf">Mejor amigo</label>
        <input type="text" class="form-control" id="addNombreBf">
      </div>
      <div class="form-group col-md-4">
        <label for="addUnidades">Unidades</label>
        <input type="number" value="0" class="form-control" id="addUnidades">
      </div>
    </div>
    </div>
    <div class="form-group">
      <label for="addCata">Cata</label>
      <textarea class="form-control is-invalid" id="addCata" rows="3"></textarea>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-dark" id="btnGuardarModal" onclick="fn_addProd()">Guardar cambios</button>
    </div>
  </form>
</div>

</div>
</div>
</div>

<!-- MODAL PARA EDITAR PRODUCTO ////////////////////////////////////////////////////////////////////////////// -->

<div class="modal fade" id="modalEditPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tMEditProduc">Editar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" action="#" method="POST">
         <div class="form-group col-md-6" >
          <div class="card mb-3" style="max-width: 540px; border: none;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="card-img-top" src="images/default-avatar.png" id="editImg" width="80" height="150">
              </div>
              <div class="col-md-8">
                <div class="card-body" >

                  <div class="form-group">
                    <div class="input-group is-invalid">
                      <div class="custom-file" lang="es">
                        <input type="file" class="custom-file-input" name="image" id="imagedit" required>
                        <label class="custom-file-label" for="validatedInputGroupCustomFile"></label>

                      </div>
                      <div class="input-group-append">
                       <button class="btn btn-dark uploadedit" value="Subir imagen" type="button">Subir</button>
                     </div>
                   </div>
                 </div>                  
               </div>
             </div>
           </div>
         </div>
       </div>
       <br>
       <br>
       <div class="form-row">
        <div class="form-group col-md-4">
          <label for="editNombre">Nombre</label>
          <input type="text" class="form-control" id="editNombre">
        </div>
        <div class="form-group col-md-4" >
          <label for="inputPassword4">Fermentacion</label>
          <input type="text" class="form-control" id="editFermentacion">
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4">Alcohol</label>
          <input type="text" class="form-control" id="editAlcohol">
        </div>
        <div class="form-group col-md-2">
          <label for="inputEmail4">Temperatura</label>
          <input type="text" class="form-control" id="editTemperatura">
        </div>

      </div>
      <div class="form-row">
       <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">Descripcion</label>
        <textarea class="form-control" id="editDescripcion" rows="3"></textarea>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">Cepa</label>
        <textarea class="form-control" id="editCepa" rows="3"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Nacimiento</label>
        <input type="date" class="form-control" id="editNacimiento">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Barrica</label>
        <input type="text" class="form-control" id="editBarrica">
      </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">Presentacion</label>
        <input type="text" class="form-control" id="editPresentacion">
      </div>
      <div class="form-group col-md-2">
        <label for="inputEmail4">Precio</label>
        <input type="number" class="form-control" id="editPrecio">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="editNombreBf">Mejor amigo</label>
        <input type="text" class="form-control" id="editNombreBf">
      </div>
      <div class="form-group col-md-4">
        <label for="editUnidades">Unidades</label>
        <input type="number" class="form-control" id="editUnidades">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Cata</label>
      <textarea class="form-control" id="editCata" rows="3"></textarea>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-dark" id="btnGuardarModal" onclick="fn_updateProd()">Guardar cambios</button>
    </div>
  </form>
</div>

</div>
</div>
</div>


<!-- MODAL ELIMINAR PRODUCTO///////////////////////////////////////////////////////////////////////// -->
<!-- Modal -->
<div class="modal fade" id="modalDelPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleDelete">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Deseas eliminar el producto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-dark" id="btndelG" onclick="fn_delProd(this)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery/jquery.min.js"></script>
<script src="js/layout.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/funcion.js" type="text/javascript"></script>


</body>
</html>