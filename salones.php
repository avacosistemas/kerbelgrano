<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="salones">
	       <img src="KER_BELGRANO_Website/EVENTOS/KER_BELGRANO_EVENTOS_banner_01.jpg" alt="KER_BELGRANO_EVENTOS_banner_01" class="img-responsive" />
	       <div class="col-md-6" style="padding-left:0;">
		       <img src="KER_BELGRANO_Website/EVENTOS/KER_BELGRANO_EVENTOS_foto_01.jpg" alt="KER_BELGRANO_EVENTOS_banner_01" class="img-responsive" />
	       </div>
	       <div class="col-md-6">
		       <h1>Time to celebrate</h1>
		       <p>Tenemos todos los servicios para que tu evento sea inolvidable.<br>Agasajá a tus invitados con lo mejor de nuestro catering.<br> Tenemos mucho para ofrecerte.<br>Consultanos para reservar tu evento en Ker Belgrano.
</p>
				<ul>
					<li style="color:#fff;">
					<img src="KER_BELGRANO_Website/EVENTOS/KER_BELGRANO_EVENTOS_icono_corporativo.png" alt="KER_BELGRANO_EVENTOS_icono_corporativo" width="76" height="71" />
					CORPORATIVOS
					</li>
					<li style="color:#fff;">
					<img src="KER_BELGRANO_Website/EVENTOS/KER_BELGRANO_EVENTOS_icono_social.png" alt="KER_BELGRANO_EVENTOS_icono_corporativo" width="76" height="71" />
					SOCIALES
					</li>
				</ul>
					
<a href="contacto.php?tipo=Salones Cotizacion&salon=Consulta#contacto">CONSULT&Aacute;</a>
	       </div>
	       <div class="clear"></div>
	       
       </div>
       
       <div class="salonestexto">
		       <div class="container">
			       <h1>Eventos Corporativos & Sociales</h1>
			       <p>En Ker Belgrano todo se conjuga para asegurar el éxito de su evento, brindándole asesoramiento calificado y asistencia personal para la realización de eventos corporativos y sociales.</p>
			       <ul>
				       <li><a href="#salonker">SALÓN KER</a></li>
				       <li><a href="#salonbelgrano">SALÓN BELGRANO</a></li>
			       </ul>
			       
			       <div class="salon" id="salonker">
				       <div class="col-md-6">
					       <h1>Salón Ker</h1>
					       <p>Nuestro Salón Ker ofrece un espacio cálido y versátil, ideal para reuniones y capacitaciones como así también para eventos sociales pequeños, como cumpleaños, cocktails y festejos de civil.</p>
					       <a href="contacto.php?tipo=Salones Cotizacion&salon=Salon Ker#contacto">CONSULT&Aacute;</a>
				       </div>
				       <div class="col-md-6"><img src="img/KER_BELGRANO__EVENTOS_Salon_Ker.jpg" class="img-responsive" style="display:block; margin:auto;"></div>
				       <div class="clear"></div>
			       </div>
			       
			       <div class="salon" id="salonbelgrano">
				       <div class="col-md-6">
					       <h1>Salón Belgrano</h1>
					       <p>Es un salón pensado para grupos reducidos de personas que requieran llevar a cabo reuniones corporativas en un ámbito privado y tranquilo.  
En Ker Belgrano todo se conjuga para asegurar el éxito de su evento!
</p>
					       <a href="contacto.php?tipo=Salones Cotizacion&salon=Salon Ker#contacto">CONSULT&Aacute;</a>
				       </div>
				       <div class="col-md-6"><img src="img/KER_BELGRANO__EVENTOS_Salon_Belgrano.jpg" class="img-responsive" style="display:block; margin:auto;"></div>
				       <div class="clear"></div>
			       </div>
			       
			       <div class="col-md-12"><img src="img/KER_Salones/KER_BELGRANO_SALONES_WEB/KER_BELGRANO_SALONES_WEB_capacidades.jpg" class="img-responsive"></div>
			       
		       </div>
	       </div>
        
        
        
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
