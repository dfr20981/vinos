<?php
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
  <link rel="stylesheet" type="text/css" href="css/st_bodegas.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet"> 
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <title>La buena Copa</title>
</head>
<body>
   <div class="container-fluid">
        <div class="row menu_nbr" style="height: 86px;">
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top bgcolor1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto" style="margin-right: 20%;">
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="textbodega">INICIO</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="textbodega">NOSOTROS</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="textbodega">BODEGAS</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="textbodega">GALERIA</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="textbodega">CONTACTO</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="text1">BIENVENIDO</a>
                </li>
                <li class="nav-item active" >
                  <a class="nav-link" href="#" id="text1">REGISTRO</a>
                </li>
              </ul>
            </div>
            <a class="nav-link" href="#" id="text3">La buena copa</a>
            <a  href="#"  >
              <img src="img/logo_la_buena_copa_navbar.png" class="d-inline-block align-top" alt="" loading="lazy" >
            </a>
          </nav>
        </div>
        <div class="row mapa_div">
          <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
              <div id="mapid" style="width:100%;"></div>
          </div>  
          <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <div id="list_prove" class="list-group">
              
            </div>
          </div>  
        </div>
        <div class="row final_page">
          <div class="img_footer1">
            <div class="card-body">
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
                        <div class="row">
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
                                        <center><p  style="font-weight: bold; color: #460932;" class="card-text">Correo electronico</p></center>
                                        <center><p class="card-text" style="color: black">atencion@labuenacopa.com</p></center>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="card">
                                      <div class="card-body">
                                        <center><img src="img/contact1.png"></center>
                                        <center><p  style="font-weight: bold; color: #460932;" class="card-text">llamanos</p></center>
                                        <center><p class="card-text" style="color:black;">55 21 24 07 10</p></center>
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
        </div>   
   </div> 

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/funcion.js" type="text/javascript"></script>
  <script src="js/bodega/layout.js" type="text/javascript"></script>
  <script src="js/bodega/oper.js" type="text/javascript"></script>
  <script type="text/javascript">
    AOS.init();
  </script>
</body>
</html>