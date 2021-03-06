<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>La buena copa</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/estilos.css">
 <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
 <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
</head>

<body  id="bodygal">
  <!-- BARRA DE NAVEGACION--------------------------------------------------------------------------------------------------------------------- -->
  <nav class="navbar navbar-expand-lg navbar-dark bgcolor1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item active" >
          <a class="nav-link" href="index.php" id="textbodega"  target="_blank">INICIO</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="index.php#sobre_nosotos" id="textbodega"  target="_blank">NOSOTROS</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="bodegas.php" id="textbodega"  target="_blank">BODEGAS</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="galeria.php" id="textbodega"  >GALERIA</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#fondo-imag" id="textbodega">CONTACTO</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#" id="text1">BIENVENIDO</a>
        </li>
        <li class="nav-item active" >
          <a class="nav-link" href="#" id="text1">REGISTRO</a>
        </li>
      </ul>
    </div>
    <a class="nav-link" href="#" id="text3">La <span id="buena">buena</span> copa</a>
    <a  href="#"  >
      <img src="img/logo_la_buena_copa_navbar.png" class="d-inline-block align-top" alt="" loading="lazy" >
    </a>
  </nav>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------ -->
  <br>

  <section class="gallery-block grid-gallery" id="gallery-block" >
    <div class="container1">
      <div class="heading">
        <p class="card-text titleGaleria ">Nuestra Galeria</p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 item ">
          <a class="lightbox" href="img/image1.png">
            <img class="img-fluid image scale-on-hover" src="img/image1.png">
            <span class="description">
              <span class="description-heading">Lorem Ipsum</span>
              <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            </span>
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image2.png">
            <img class="img-fluid image scale-on-hover" src="img/image2.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image3.png">
            <img class="img-fluid image scale-on-hover" src="img/image3.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image4.png">
            <img class="img-fluid image scale-on-hover" src="img/image4.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image5.png">
            <img class="img-fluid image scale-on-hover" src="img/image5.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image6.png">
            <img class="img-fluid image scale-on-hover" src="img/image6.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image7.png">
            <img class="img-fluid image scale-on-hover" src="img/image7.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image8.png">
            <img class="img-fluid image scale-on-hover" src="img/image8.png">
          </a>
        </div>
        <div class="col-md-6 col-lg-4 item">
          <a class="lightbox" href="img/image9.png">
            <img class="img-fluid image scale-on-hover" src="img/image9.png">
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ----------------------------------------------------------------------------------------------------------------------------------------- -->
  <br>
  <br>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
  baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  AOS.init();
</script>
</body>
</html>