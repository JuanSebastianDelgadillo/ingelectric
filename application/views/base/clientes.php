
<div class="parallax2">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	<div class="container">
		<a name="clientes" id="clientes"></a>
			<br><br>
			<div class="row">
				<div class="col-sm-4"><h1>Nuestros Clientes</h1></div>
			</div>
			<br><br>

	   <section class="customer-logos slider">
	   	
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/sonacol.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/oxiquim.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/gasmar.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/catenaria.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/olivajo.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/heidi.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/modulor.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/lafuente.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/electrogas.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/bec.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/turavion.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/haga.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/aconcagua.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/azimec.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/betolli.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/abogado.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/imcomex.png"></div>
	      <div class="slide"><img src="<?php echo base_url(); ?>/assets/img/clientes/terracam.png"></div>
	   </section>
	   <br><br>
	</div>
</div>


<script type="text/javascript">
		$(document).ready(function(){
	    $('.customer-logos').slick({
	        slidesToShow: 4,
	        slidesToScroll: 1,
	        autoplay: true,
	        autoplaySpeed: 1500,
	        arrows: false,
	        dots: false,
	        pauseOnHover: false,
	        responsive: [{
	            breakpoint: 768,
	            settings: {
	                slidesToShow: 2
	            }
	        }, {
	            breakpoint: 520,
	            settings: {
	                slidesToShow: 1
	            }
	        }]
	    });
	});
</script>