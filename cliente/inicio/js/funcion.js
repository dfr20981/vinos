  // ESTRELLAS----------------------------------------------------------------------------------------------------------------------------
  $( '.prueba' ).hover(
  function() {
    $( this ).append( $( `<span><br><center><div class="ec-stars-wrapper">
  <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
  <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
  <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
  <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
  <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
</div></span>` ) );
  }, function() {
    $( this ).find( "span" ).last().remove();
  }
);

 
$( "div.fade" ).hover(function() {
  $( this ).fadeOut( 100 );
  $( this ).fadeIn( 500 );
});

$(window).scroll(function(){
    $('#nav').toggleClass('scrolled',$(this).scrollTop()>50);

    if ($(this).scrollTop()>50) {
      $('#logo_copa2').attr('src', 'img/logo_la_buena_copa_navbar.png');
    }
    else if ($(this).scrollTop()<50) {
      $('#logo_copa2').attr('src', '');
    }
  


});
// BARRA DE NAVEHACION----------------------------------------------------------------------------------------------------------------------
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
  $('#text3').html('<span>La <span style="color:#8bb121;">buena</span> copa</span>');

}
else if ($(this).scrollTop()<50) {
 $('#text3').html('');
 $('#nav2').html('');
}
if ($(this).scrollTop()>50) {
  $('#text5').html('<img src="img/user2.png">');

}
else if ($(this).scrollTop()<50) {
 $('#text5').text('');
}
if ($(this).scrollTop()>50) {
  $('#text6').html('<img src="img/carrito.png">');

}
else if ($(this).scrollTop()<50) {
 $('#text6').text('');
}

if ($(this).scrollTop()>50) {
  $('#text7').html('<img src="img/heart1.png">');

}
else if ($(this).scrollTop()<50) {
 $('#text7').text('');
}

});


