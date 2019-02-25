<!-- Footer -->
	<br><br><br>
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Contactanos</h5>
					<ul class="list-unstyled quick-links">
						<li>
              <a target="_blank" href="https://www.facebook.com/pages/category/Personal-Blog/Proyectos-Ingelectric-Chile-Ltda-2020758067953923/">
                <img src="<?php echo base_url(); ?>assets/img/logo-face-cont.png"> Facebook
              </a>
            </li>
            <li>
              <a href="tel:+56996166485">
                <img src="<?php echo base_url(); ?>assets/img/logo-tel-cont.png"> Teléfono
              </a>
            </li>
            <li>
              <a href="mailto:info@ingelectricchile.cl">
                <img src="<?php echo base_url(); ?>assets/img/logo-email-cont.png"> Email
              </a>
            </li>
            <li>
              <a target="_blank" href="<?php echo base_url();?>assets/presentacion/presentacion_ingelectricchile.pdf">
                <img src="<?php echo base_url(); ?>assets/img/logo-carta-cont.png"> Carta de Presentación
              </a>
            </li>
            <li>
              <a target="_blank" href="https://api.whatsapp.com/send?phone=56996166485&text=Estimado ingelectricchile, quisiera contactarme con usted.">
                <img src="<?php echo base_url(); ?>assets/img/logo-what-cont.png"> Whatssap
              </a>
            </li>
            <li>
              <a href="javascript:void();" id="open_form2">
                <img src="<?php echo base_url(); ?>assets/img/logo-form-cont.png"> Formulario de Consultas
              </a>
            </li>
						
						

					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Servicios</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Elaboración de Proyectos Eléctricos</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Elaboración de Proyectos Energías Renovables</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Montajes Elétricos e Instrumentación</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Automatización y Control Industrial</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Implementación de Corrientes Débiles</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Asesorias Eléctricas</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Servicios de Mantención Industrial</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Eficiencia Energétia</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Instalación de Alumbrado</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fabricación de Tableros</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Estructuras Metálicas</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Remodelaciones</a></li>
						
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Nuestra Ubicación</h5>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.5660641786164!2d-71.48531917078326!3d-32.99680787402077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDU5JzQ4LjUiUyA3McKwMjknMDUuMiJX!5e0!3m2!1ses-419!2scl!4v1550773323990" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>	
		</div>
	</section>
	<br>

	<div class="modal fade bd-example-modal-lg" id="modal_form2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="width:90%;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Formulario de Consultas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url(); ?>/index.php/mail.php">
          <div class="form-group">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres">
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellidos">
            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <select name="opcion" name="opcion"  placeholder="Seleccione su consulta...">
              <option>Consulta</option>
              <option>Cotización</option>
              <option>Reclamo</option>
              <option>Otros</option>
            </select>
            <br><br>
            <textarea placeholder="Su consulta" id="consulta" name="consulta"></textarea>
          </div>

        </form>
        <div class="row">
          <div class="col-md-12">
            <p id="faltaComplete"> ¡¡ Debe completar todos los campos !!</p>
          </div>
        </div>
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="enviar">Enviar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal-confirma" id="bien">
  <p>¡¡ Muchas gracias por su contacto, pronto nos contactaremos con usted !!</p>
</div>

<div class="modal fade bd-example-modal-lg" id="mal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="width:90%;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <p>Correo no ha sido enviado</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
     var namePattern = "^[a-z A-Z]{4,30}$";
    var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
     
    function validaInput(idInput) {
      if (idInput.length>3) {

        return true;
      }else{
        return false;
      }

    
    }

  $("#open_form2").click(function(){
    $('#modal_form2').modal({backdrop: 'static', keyboard: false})
  });

  $("#enviar").click(function(){ 
    var valida = false;
    var nombre = document.getElementById("nombre").value;
    var valNom = false;
    var apellido = document.getElementById("apellido").value;
    var valApe = false;
    var telefono = document.getElementById("telefono").value;
    var valTel = false;
    var email = document.getElementById("email").value;
    var valEma = false;
    var consulta = document.getElementById("consulta").value.trim();
    var valCons = false;

    if (validaInput(nombre)) { valNom = true; }else{ $("#nombre").css("border-color", "red");}

    if (validaInput(apellido)) { valApe=true; }else{ $("#apellido").css("border-color", "red"); }

    if (validaInput(telefono)) { valTel= true; }else{ $("#telefono").css("border-color", "red"); }

    if (validaInput(email)) { valEma=true; }else{ $("#email").css("border-color", "red"); }

    if (validaInput(consulta)) { valCons=true; }else{ $("#consulta").css("border-color", "red"); }

     if (valNom && valApe && valTel &&valEma && valCons) {

      datos ={
        "nombre"  : nombre,
        "apellido": apellido,
        "telefono": telefono,
        "email"   : email,
        "consulta": consulta
      }

      console.log(datos);

       $.ajax({
          data: datos,
          type: "POST",
          url: "<?php echo base_url(); ?>assets/mail/mail.php",
          success: function(response){
            $( "#bien" ).fadeIn( 1000, function() {
              // Animation complete
            });
              $('#modal_form').modal('hide')
              setTimeout(cerrar, 2000);
          
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    $('#mal').modal('toggle'); 
                }
          });
     }else{

        $('#faltaComplete').css("display", "block");
     }

    });
  
function cerrar(){
  
  $( "#bien" ).fadeOut( "slow", function() {
              // Animation complete
            });
  
}

</script>
	
	<!-- ./Footer -->
</body>
</html>
