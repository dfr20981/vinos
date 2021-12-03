<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/registro.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet"> 


  <title>Labuenacopa</title>
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark fixed-top bgcolor">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="btndes">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto"  style="margin-right: 25%;">
        <li class="nav-item active">
          <a class="nav-link" href="../inicio/inicio.php" id="nava" >INICIO<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../inicio/inicio.php#sobre_nosotos" id="nava">NOSOTROS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../bodegas/bodegas.php" id="nava" >BODEGAS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../galeria/galeria.php" id="nava" >GALERIA<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../inicio/inicio.php#fondo-imag" id="nava">CONTACTO</a>
        </li> 
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li class="nav-item active" >
          <a class="nav-link" href="../login/login.php" id="text1"><button type="button" class="btn btn-dark ">Iniciar&nbspSesion</button>
          </a>
        </li> 
        <li class="nav-item active" >
          <a class="nav-link" href="../login/login.php" id="text2"></a>
        </li> 
      </ul>
    </div>
  </nav>
  <div class="centradoR"><img id="lgoRegistro" src="img/logo_la_buena_copa.png" width="250" height="250"></div>




  <div class="card shadow-lg p-3 mb-5 bg-white rounded" id="bg-white" style="background-color:  #4f4545ba !important;">
   <h1 id="titleregistro">Registrate</h1>
   <div class="card-body">
    <section>
      <form class="cliente" action="index.html" method="post">
       <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control " type="text" name="nombre" value="" required >
      </div>

      <div class="form-group">
        <label for="correo">Correo</label>
        <input  type="email" class="form-control" name="email" value=""required>
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control"  name="password" value="" required>
      </div>
      <div class="form-group ">
        <label for="confirmar_contraseña">Repetir contraseña</label>
        <input type="password" class="form-control"  name="c_password" value="" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-5">
         <label for="correo">Fotografia</label>
         <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Seleccionar</label>
        </div>
      </div>
      <div class="form-group col-md-5">
        <label for="nacimiento">Nacimiento</label>
        <input type="date" class="form-control"  name="fecha" step="1" min="2002-01-01" max="2020-12-31" value="" required>
      </div>
       <div class="form-group col-md-2">
        <label for="codigo_postal">Codigo postal</label>
        <input class="form-control" type="text" name="codigo_postal" value="">
      </div>
    </div>
   <!--  <div class="form-row">


      <div class="form-group col-md-4">
        <label for="calle">Calle</label>
        <input class="form-control" type="text" name="calle" value="">
      </div>
      <div class="form-group col-md-5">
        <label for="colonia">Colonia</label>
        <input class="form-control" type="text" name="colonia" value="">
      </div>
      <div class="form-group col-md-3">
        <label for="numero_exterior">Numero exterior</label>
        <input class="form-control" type="text" name="numero_exterior" value="">
      </div>
    </div> -->
   <!--  <div class="form-row">

      <div class="form-group col-md-2">
        <label for="numero_interio">Numero interior</label>
        <input class="form-control" type="text" name="nombre" value="">
      </div>
      <div class="form-group col-md-4">
        <label for="delegacion">Delegacion</label>
        <input class="form-control" type="text" name="delegacion" value="">
      </div>
      <div class="form-group col-md-2">
        <label for="codigo_postal">codigo postal</label>
        <input class="form-control" type="text" name="codigo_postal" value="">
      </div>
      <div class="form-group col-md-4">
        <label >Estado</label>
        <select class="custom-select estados" name="repuplica"required>
          <option selected disabled value="">Estados</option>
          <option value="">Aguascalientes</option>
          <option value="">Baja California</option>
          <option value="">Baja California Sur</option>
          <option value="">Campeche</option>
          <option value="">Coahuila de Zaragoza</option>
          <option value="">Colima</option>
          <option value="">Chiapas</option>
          <option value="">Chihuahua</option>
          <option value="">cdmx</option>
          <option value="">Durango</option>
          <option value="">Guanajuato</option>
          <option value="">Guerrero</option>
          <option value="">Hidalgo</option>
          <option value="">Jalisco</option>
          <option value="">México</option>
          <option value="">Michoacán de Ocampo</option>
          <option value="">Morelos</option>
          <option value="">Nayarit</option>
          <option value="">Nuevo León</option>
          <option value="">Oaxaca</option>
          <option value="">Puebla</option>
          <option value="">Querétaro</option>
          <option value="">Quintana Roo</option>
          <option value="">San Luis Potosí</option>
          <option value="">Sinaloa</option>
          <option value="">Sonora</option>
          <option value="">Tabasco</option>
          <option value="">Tamaulipas</option>
          <option value="">Tlaxcala</option>
          <option value="">Veracruz</option>
          <option value="">Yucatán</option>
          <option value="">Zacatecas</option>
        </select>
      </div>
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div> -->
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="" data-toggle="modal" data-target="#exampleModal">
          Acepto aviso de privacidad
        </label>
      </div>
    </div> 
    <button type="button" class="btn btn-dark btn-lg btn-block" id="btnRegistro">Registrarse</button>

  </form>

</section>
</div>
</div>

<!-- MODAL//////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Scrollable modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aviso de Privacidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        require_once('recursos/terminosycondicionesuser.php')
        ?>
      </div>

    </div>
  </div>
</div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>