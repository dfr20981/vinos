<?php
  session_start();
    //require_once("../back/db/dbExec.php");
  if(isset($_SESSION["token"])){
    if($_SESSION["token"]!=''){
        if (isset($_SESSION['tipo'])){
          if ($_SESSION['tipo']=='P'){
            header("Location: /labuenacopa/proveedor/");                       
          }else if ($_SESSION['tipo']=='C'){
            header("Location: /labuenacopa/cliente/");                       
          }else if ($_SESSION['tipo']=='A'){
            header("Location: /labuenacopa/admin/");                       
          }elseif ($_SESSION['tipo']=='M'){
            header("Location: /labuenacopa/master/");                       
          }else{
            header("Location: /labuenacopa/inicio/"); 
          } 
          exit();                      
        }  
    }  
  }
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
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet"> 
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Italianno&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title>La buena copa</title>
</head>
<body>
  <nav class="navbar  navbar-expand-lg navbar-dark fixed-top bgcolor">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="btndes">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto"  style="margin-right: 20%;">
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
        <!--<li class="nav-item active" onclick="fn_bienvenido()">-->
          <li class="nav-item active">
            <a class="nav-link" href="../login/login.php" id="text1"></a>
          </li> 
          <li class="nav-item active" >
            <a class="nav-link" href="../registro/registro.php" id="text2"></a>
          </li> 
        </ul>
      </div>
      <a class="nav-link" href="#" id="text3"></a>
    </a>
    <a  href="#" id="logo_copa2_prueba" >
      <img id="logo_copa2"  class="d-inline-block align-top" alt="" loading="lazy" >

    </a>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active contenedor">
        <img src="img/banner4.png" class="d-block w-100" alt="...">
        <div class="texto-encima css-typing"><p style="color: #460932;">La <span style="color: #8bb121;">buena</span> copa</p></div>
        <div class="centrado"><img id="logocopa" src="img/logo_la_buena_copa.png" ></div>
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
        </div>
      </div>
    </div>
  </div >
  <br>

  <div class="cont-princ-slider1" >
    <div class="slier-prin1">
      <img class="juegos_DWG1" src="img/cliente1.png">
      <img class="juegos_DWG1" src="img/cliente2.png">
      <img class="juegos_DWG1" src="img/cliente3.png">
      <img class="juegos_DWG1" src="img/cliente1.png">
      <img class="juegos_DWG1" src="img/cliente2.png">
      <img class="juegos_DWG1" src="img/cliente3.png">
      <img class="juegos_DWG1" src="img/cliente1.png">
      <img class="juegos_DWG1" src="img/cliente2.png">
      <img class="juegos_DWG1" src="img/cliente3.png">
      <img class="juegos_DWG1" src="img/cliente1.png">
      <img class="juegos_DWG1" src="img/cliente2.png">
      <img class="juegos_DWG1" src="img/cliente3.png">



    </div>
  </div>
<br>
<br>

  <div id="sobre_nosotos">
    <br>

    <div class="row row-cols-1 row-cols-md-2" >
      <div class="col mb-4">
        <div class="card h-100 shadow p-3 mb-5 bg-white rounded" style="margin-left: 5%;">
          <div class="card-body">
            <center><p class="card-text title ">Sobre Nosotros</p></center>
            <br>
            <center><p class="card-text parrafo ">Somos  personas que <b>amamos</b> y disfrutamos los momentos y experiencias que dejan las <b>copas de vino</b> al decir salud, copas de vino con sabor a <b>México</b> y talento de bodegas internacionales, se dice que si no miras a los ojos al chocar los cristales no tendrás buen <b>amor</b>, mismo que reflejamos en <b>confianza</b>, <b>afecto</b>, <b>respeto</b> y <b>admiración</b> es por eso que creamos  momentos en el que te relajaras, realizaras negocios, te enamoraras de tu pareja, conocerás gente, viajaremos y lo mas importante <b>cataremos vino</b>.</p></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card h-100" style="">
          <div class="card-body"data-aos="fade-left"
          data-aos-anchor="#example-anchor"
          data-aos-offset="1000"
          data-aos-duration="1000">
          <center><p class="card-text"><img src="img/nosotros1.png" id="img_nosotros"></p></center>
        </div>
      </div>
    </div>
  </div>
</div>


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

                     <li class="facebook"><a href="https://www.facebook.com/Labuenacopacom-107186101036304" class="entypo-facebook" target="_blank"><img src="img/facebook.png"></a></li>
                     <li class="twitter"><a href="https://twitter.com/Labuenacopacom" class="entypo-twitter" target="_blank"><img src="img/twitter.png"></a></li>
                     <li class="dribbble"><a href="http://www.instagram.com/labuenacopa.com01" class="entypo-dribbble" target="_blank"><img src="img/instagram.png"></a></li>
                     <li class="behance"><a href="https://www.tiktok.com/@labuenacopa.com01?lang=es" class="entypo-behance" target="_blank"><img src="img/tiktok.png"></a></li>
                     <li class="linked-in"><a href="https://www.youtube.com/channel/UCmSn820ryrC8evyK8VTJd3Q/" class="entypo-linkedin" target="_blank"><img src="img/youtube.png"></a></li>

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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/funcion.js" type="text/javascript"></script>
<script type="text/javascript">
  AOS.init();
</script>
<script type="text/javascript">
  $(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop()>50);

    if ($(this).scrollTop()>50) {
      $('#logo_copa2').attr('src', 'img/logo_la_buena_copa_navbar.png');
    }
    else if ($(this).scrollTop()<50) {
      $('#logo_copa2').attr('src', '');
    }
    if ($(this).scrollTop()>50) {
      $('#text').text('La buena copa');

    }
    else if ($(this).scrollTop()<50) {
     $('#text').text('');
   }
   if ($(this).scrollTop()>50) {
    $('#text1').text('BIENVENIDO');

  }
  else if ($(this).scrollTop()<50) {
   $('#text1').text('');
 }
 if ($(this).scrollTop()>50) {
  $('#text2').text('REGISTRO');

}
else if ($(this).scrollTop()<50) {
 $('#text2').text('');
}
if ($(this).scrollTop()>50) {
  $('#text3').html('La<span style="color: #8bb121;"> buena</span> copa');
        // $('#text4').text('buena');
        // $('#text5').text('copa');

      }
      else if ($(this).scrollTop()<50) {
       $('#text3').text('');
       // $('#text4').text('');
       //  $('#text5').text('');
     }
   });
 </script> 
</body>
</html>