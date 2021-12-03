<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Italianno&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">



  <title>La buena copa</title>
</head>
<body>
  <!-- BARRA DE NAVEGACION-------------------------------------------------------------------------------------------------------------------------- -->
  <nav class="navbar  navbar-expand-lg navbar-dark fixed-top bgcolor">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="btndes">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto" id="ulBarraBaron">
        <li class="nav-item active">
          <a class="nav-link" href="index.html" id="nava" target="_blank">INICIO<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.html#sobre_nosotos" id="nava"target="_blank">NOSOTROS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="bodegas.html" id="nava" target="_blank">BODEGAS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="galeria.html" id="nava" target="_blank">GALERIA<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#fondo-imag" id="nava">CONTACTO</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#" id="text1"></a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#" id="text2"></a>
        </li>
      </ul>
    </div>
    <a class="nav-link" href="#fondo-imag" id="text5"><!-- <img src="img/user2.png"> --></a>
    <a class="nav-link" href="#fondo-imag" id="text7"><!-- <img src="img/user2.png"> --></a>
    <a class="nav-link" href="#fondo-imag" id="text6"><!-- <img src="img/carrito.png"> --></a>
  </nav>


  <!-- CARROUSEL--------------------------------------------------------------------------------------------------------------------------------------->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active contenedor">
        <img src="img/bannervino.png" class="d-block w-100" alt="...">
        <div class="texto-encima1 css-typing"><p>Barón Balch'é</p></div>
        <div class="centrado">
        </div>
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
  </div >
  <!-- ---------------------------------------------------------------------------------------------------------------------------------------------- -->


  <br> <center><h1 id="titleVinoP">VINOS</h1></center>
  <!-- CATEGORIAS--------------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="row" >
    <div class="col-sm-3">
      <div class="card" >
        <div class="card-body">
          <h3 class="card-title item3">Categorias</h3>
          <p class="card-text">
            <div class="card" >
              <ul class="list-group list-group-flush">
                <li class="list-group-item item1">Vinos blancos</li>
                <li class="list-group-item item2">Vinos Tintos</li>
                <li class="list-group-item item2">Vinos Rosados</li>
                <li class="list-group-item item2">Vinos espumosos</li>
              </ul>
            </div>
          </p>
          <br>
          <br>
          <h3 class="card-title item4">Filtrar por precio</h3>
          <form>
            <div class="form-group">
              <input type="range" class="form-control-range range1" id="formControlRange">
              <center><p class="card-text title2">$15.00-$150.00</p></center>
            </div>
          </form>
          <a href="#" class="btn btn-orange" id="orange"><button type="button" class="btn btn-dark" id="darkC">Filtrar</button>
          </a>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- VINOS-------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="col-sm-9" >
      <div class="card">
        <div class="card-body">
          <p class="card-text">
            <div class="row row-cols-1 row-cols-md-3">
              <div class="col mb-4" >
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba">
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark">Detalles</button>&nbsp<a href="producto.html"><button type="button" class="btn btn-dark dark ">Comprar</button></a></center>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba">
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark" >Detalles</button>&nbsp<button type="button" class="btn btn-dark dark" >Comprar</button></center>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba">
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark">Detalles</button>&nbsp<button type="button" class="btn btn-dark dark">Comprar</button></center>
                    <div class="fade"></div>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba" >
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark">Detalles</button>&nbsp<button type="button" class="btn btn-dark dark">Comprar</button></center>
                    <div class="fade"></div>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba">
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark">Detalles</button>&nbsp<button type="button" class="btn btn-dark dark">Comprar</button></center>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="img/botella.png" class="card-img-top" alt="...">
                  <div class="card-body prueba">
                    <center><h3 class="card-title titleVino">Nombre del Vino</h3></center>
                    <center><p class="card-text textVino">Pequeña descripcion del vino </p></center>
                    <center><button type="button" class="btn btn-dark dark">Detalles</button>&nbsp<button type="button" class="btn btn-dark dark">Comprar</button></center>
                  </div>
                </div>
              </div>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>





  <div id="fondo-imag">
  <br>
  <br>
  <div class="card-body " >
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title titleform">Envianos mensaje</h4>
            <p class="card-text">
             <form role="form" id="contactForm" data-toggle="validator" class="shake">
              <div class="row">
                <div class="form-group col-sm-6" id="fomr_subtitle">
                  <label  for="exampleFormControlInput1">Nombre</label>
                  <input type="text" class="form-control" id="name" required data-error="Por favor, llena este campo.">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-sm-6" id="fomr_subtitle">
                  <label id="fomr-subtitle" for="exampleFormControlInput1">Apellido</label>
                  <input type="text" class="form-control" id="apellido"required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group" id="fomr_subtitle">
                <label id="fomr-subtitle" for="exampleFormControlInput1">Correo electronico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required >
              </div>
              <div class="form-group" id="fomr_subtitle">
                <label id="fomr-subtitle" for="exampleFormControlInput1">Mensaje</label>
                <textarea id="message" class="form-control" rows="5"  required></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div>
               <button type="submit" id="form-submit" class="btn btn-dark btn-lg pull-right " name="btTutorial" >Enviar</button>
             </div>
           </form>
         </p>
       </div>
     </div>
   </div>
   <div class="col mb-4" >
    <div class="card h-100">
      <div class="card-body">
        <h4 class="card-title titleform">Contactanos</h4>
        <p class="card-text">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <center><img src="img/gmail.png"></center>
                      <center><p  id="fomr_subtitle2" class="card-text">Correo electronico</p></center>
                      <center><p id="fomr_subtitle1">atencion@labuenacopa.com</p></center>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <center><img src="img/contact1.png"></center>
                      <center><p  id="fomr_subtitle2" class="card-text">Llamanos</p></center>
                      <center><p id="fomr_subtitle1">55 21 24 07 10</p></center>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <ul class="social">
                  <li class="facebook"><a href="#" class="entypo-facebook"><img src="img/facebook.png"></a></li>
                  <li class="twitter"><a href="#" class="entypo-twitter"><img src="img/twitter.png"></a></li>
                  <li class="dribbble"><a href="#" class="entypo-dribbble"><img src="img/instagram.png"></a></li>
                  <li class="behance"><a href="#" class="entypo-behance"><img src="img/tiktok.png"></a></li>
                  <li class="linked-in"><a href="#" class="entypo-linkedin"><img src="img/whatsapp.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/funcion.js" type="text/javascript"></script>
<script type="text/javascript">
  AOS.init();
</script>
<script type="text/javascript">

</script>












</style>
</body>
</html>
