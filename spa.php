<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="spa">
	       <img src="KER_BELGRANO_Website/SPA/KER_BELGRANO_SPA_banner01.jpg" alt="KER_BELGRANO_SPA_banner01" class="img-responsive hidden-xs"/>
	       <img src="KER_BELGRANO_Website/2/KER_BELGRANO_SPA_banner_01_VERSION_MOBILE.jpg" alt="KER_BELGRANO_SPA_banner01" class="img-responsive hidden-md hidden-sm hidden-lg"/>
	       <div class="lista">
	       <img src="KER_BELGRANO_Website/2/KER_BELGRANO_SPA_foto01.jpg" alt="09_KER_Spa_img01" class="img-responsive hidden-xs" />
	       <img src="KER_BELGRANO_Website/2/KER_BELGRANO_SPA_ListadePrecios_VERSION_MOBILE_ copia.jpg" alt="KER_BELGRANO_SPA_banner01" class="img-responsive hidden-sm hidden-lg"/>
	       <div class="texto">
		       <h1>LISTA DE PRECIOS</h1>
		       <h2>LIST PRICE</h2>
		       <a href="contacto.php?tipo=spa#contacto">RESERV&Aacute;</a>
		       <a href="KER_ARMONIA_SPA_ListadePrecios_DAY_SPA.pdf" target="_blank">VER LISTA</a>
	       </div>
	       </div>
	       <img src="KER_BELGRANO_Website/SPA/KER_BELGRANO_SPA_foto02.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       <img src="KER_BELGRANO_Website/SPA/KER_BELGRANO_SPA_foto03.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       
	       <div class="pad">
	       <h1>Balance your energy</h1>
	       <p style="font-size:14px; text-align:center;">Este espacio es ideal para quienes desean aprovechar los beneficios terapéuticos de la Hidroterapia, <br>
utilizando las propiedades del Sauna Seco y Ducha Escocesa que permiten eliminar las toxinas acumuladas<br>
 y favorecen la relajación de los tejidos, aliviando la contractura y el dolor muscular.<br>
En un ambiente distendido y armonioso, realizando su reserva en el front desk. <br><br>

Usted podrá disfrutar de:<br>
Jacuzzi<br>
Sauna Seco<br>
Ducha Escocesa<br>
Gabinete para Masajes, tratamientos faciales y corporales<br> 
Convenio con Gym<br><br></p>
	       <!--<a href="KER_HISTORIC_SPA_ListadePrecios_.pdf" target="_blank">VER OPCIONES</a><br>-->
	       <a href="contacto.php?tipo=spa#contacto">CONSULTA</a>
	       </div>
       </div>
        
        
	   <?php include("mensaje_whatsapp.php");?>   
        <?php include("footer.php");?>
<script src="js/jquery.bxslider1/jquery.bxslider.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider1/jquery.bxslider.css">
        
		
		<script>
	            $(document).ready(function(){
    $('.bxslider2').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: true
  	});
});
    
    $(document).ready(function(){
    $('.bxslider').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});

$(document).ready(function(){
    $('.bxslider3').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
    </body>
</html>
