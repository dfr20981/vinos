<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login.css">
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
          <a class="nav-link" href="../registro/registro.php" id="text1"><button type="button" class="btn btn-dark ">Registrate</button>
          </a>
        </li> 
        <li class="nav-item active" >
          <a class="nav-link" href="../registro/registro.php" id="text2"></a>
        </li> 
      </ul>
    </div>
</nav>
<div class="centradoR"><img id="lgoRegistro" src="img/logo_la_buena_copa.png" width="250" height="250"></div>


 <div class="card shadow-lg p-3 mb-5 bg-white rounded"  style="background-color:  #4f4545ba !important;">
  <h1 id="titleregistro">Inicia Sesion</h1>
  <div class="card-body">
    <section>
      <form id="form_login"  method="post">
        <div class="form-group">
          <label for="inp_emailMdlBienv">Correo</label>
          <input type="email" class="form-control" id="inp_emailMdlBienv" name="inp_emailMdlBienv" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="inp_passMdlBienv">Contraseña</label>
          <input type="password" class="form-control" id="inp_passMdlBienv" name="inp_passMdlBienv">
        </div>
    <button type="submit" class="btn btn-dark btn-lg btn-block" id="btnRegistro">Inicia Sesion</button>
      </form>
    </section>  
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/login.js" type="text/javascript"></script>
</body>
</html>