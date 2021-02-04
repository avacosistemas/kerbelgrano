<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
        <?php include("headerhabitaciones.php");?>
	<?php include("protocolo_covid.php");?>  		
		
	        
        <div class="habitaciones_detalle">
	        <div class="container">
		        <div class="col-md-12"><h1>HABITACI&Oacute;N <span>STANDARD</span></h1></div>
	        <div class="col-md-8 borde">
		        <div class="carousel1">
				        <div class="item"><img src="KER_BELGRANO_Website/HABITACIONES/KER_BELGRANO_HABITACIONES_standard_01.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="KER_BELGRANO_Website/HABITACIONES/KER_BELGRANO_HABITACIONES_standard_02.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="KER_BELGRANO_Website/HABITACIONES/KER_BELGRANO_HABITACIONES_standard_03.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
			        </div>
			        <h2>HABITACI&Oacute;N <span>STANDARD</span></h2>
		        <p>
			       Habitación de 20 m2, amplia y cómoda,
es una excelente opción para estadías breves y prolongadas. <br>Se pueden armar King Size o Twin Size.
<br><br>
			       <strong>Disfrute de:</strong><br><br>

·       TV LCD 32"<br>

·       Internet WI FI<br>

·       Aire acondicionado Frío/Calor individual<br>


·       Frigobar<br>

·       Kitchenette con Microondas<br>

·       Vajilla<br>

·       Caja de seguridad<br>

·       Teléfono DDI-DDN<br>

·       Secador de cabello<br>

·       Vista exterior<br>

·       Balcón<br>

·       Detectores de humo<br>
· Hotel No fumador
<br><br>
<strong>Servicios Ker:</strong><br><br>
· Desayuno Buffet Americano<br>
· Room Service<br>
· Health Club<br>
· Salones para Eventos<br>
· Internet Wi Fi en todas las areas del hotel<br>
· Lavandería y Tintorería<br>
· Asistencia médica para emergencias<br>
· Grupo electrógeno<br>
		        </p>
	        </div>
	        <div class="col-md-4">
		        
		        <div class="buscador_detalle"><!--  -->
		        <h3>RESERVAR <span>AHORA</span>
        <form action="https://reservations.travelclick.com/74787#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="207675">Standard</option>
		        <option value="207676">Superior</option>
		        <option value="207678">Executive</option>
		        <option value="">Suite</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
	        </div>
	        <div class="clear"></div>
	        </div>
	        <img src="KER_BELGRANO_Website/KER_BELGRANO_Habitaciones_Fichas_Standard.jpg" alt="01Standard_Banner_inferior_Standard" class="foto img-responsive">
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
