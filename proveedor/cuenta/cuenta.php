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
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
  <title>La buena copa</title>
</head>
<body>

  <!-- BARRA DE NAVEGACION////////////////////////////////////////////////////////////////////////////////////////// -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
     <?php
     echo '<img id="logo_prove1" src="'.$obj->prove->logo.'" width="80" height="80" alt="" loading="lazy">'; 
     echo '<span id_prove="'.$obj->prove->id.'" id="nameProv">'.$obj->prove->nom.'</span>'; 

     ?>
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="margin-right: 30px;">
      <li class="nav-item active">
        <a class="nav-link" href="../Inicio/Inicio.php"  style="font-weight: bold;">Inventario &nbsp&nbsp<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cuenta.php">
          <?php
             echo '<img id="log_user" id_use="'.$obj->usu->id.'" nom_use="'.$obj->usu->nom.'" src="img/user2.png" width="40" height="40">'; 
          ?>
          <!--<img src="img/user2.png" width="40" height="40">-->
          <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" onclick="">
        <a class="nav-link"  href="../back/registro/closeSesion.php" style="font-weight: bold;">           <button type="button" class="btn btn-dark">Salir</button>
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- FIN DE BARRA DE NAVEGACION//////////////////////////////////////////////////////////////////////////////////////// -->

<br>
<br>
<br>
<br>

<div class="card shadow-lg p-3 mb-5 bg-white rounded" id="cardDatos" >
  <div class="card-body">
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <div class="card h-100"  style="border:none;">
          <div class="card-body">
            <h1 class="card-title">Mi cuenta</h1>
            <p class="card-text">
              <form enctype="multipart/form-data" action="#" method="POST">
                <div class="form-group col-md-6" >
                  <div class="card mb-3" style="max-width: 540px; border: none;">
                    <label for="exampleInputEmail1">Logo</label>

                    <div class="row no-gutters">
                      <div class="col-md-8">
                        <img class="card-img-top" src="images/default-avatar.png" id="editImg" width="80" height="140">
                      </div>
                   </div>
                 </div>
               </div>  
               <div class="form-group col-md-12">
                        <div class="card-body" >

                          <div class="form-group">
                            <div class="input-group">
                              <div class="custom-file" lang="es">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="validatedInputGroupCustomFile"></label>

                              </div>
                              <div class="input-group-append">
                               <button class="btn btn-dark upload" value="Subir imagen" type="button">Subir</button>
                             </div>
                           </div>
                         </div>                  
                       </div>
                     </div>
                     <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>  

               <button type="button" class="btn btn-dark" value="" onclick="fn_saveDatosCuenta(0)">Guardar cambios</button>
             </form>
           </p>
         </div>
       </div>
     </div>
     <div class="col mb-4">
      <div class="card h-100"  style="border:none;">
        <div class="card-body">
          <h1 class="card-title">Mi contraseña</h1>
          <p class="card-text">
            <form>
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Repite tu contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
              </div>
              <br>
              <br>
              <br>
              <br><br><br>
              <button type="button" class="btn btn-dark" onclick="fn_saveDatosCuenta(1)">Guardar cambios</button>
            </form>
          </p>
        </div>
      </div>
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