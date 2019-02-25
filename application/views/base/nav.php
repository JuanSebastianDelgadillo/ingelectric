  <div class="cont-info" id="cont-info">
    <div class="cont-icono"><img src="<?php echo base_url(); ?>assets/img/logo_face.png" id="logo_face"><a target="_blank" href="https://www.facebook.com/pages/category/Personal-Blog/Proyectos-Ingelectric-Chile-Ltda-2020758067953923/">Facebook</a></div>
    <div class="cont-icono"><img src="<?php echo base_url(); ?>assets/img/logo_tel.png" id="logo_tel"><a target="_blank" href="tel:+56996166485">+56996166485</a></div>
    <div class="cont-icono"><img src="<?php echo base_url(); ?>assets/img/logo_ema.png" id="logo_ema"><a target="_blank" href="mailto:info@ingelectricchile.cl">Email</a></div>
    <div class="cont-icono"><img src="<?php echo base_url(); ?>assets/img/logo_carta.png" id="logo_carta"><a target="_blank" href="<?php echo base_url();?>assets/presentacion/presentacion_ingelectricchile.pdf">Carta Presentación</a></div>
    <div class="cont-icono"><img src="<?php echo base_url(); ?>assets/img/logo_what.png" id="logo_what"><a target="_blank" href="https://api.whatsapp.com/send?phone=56996166485&text=Estimado ingelectricchile, quisiera contactarme con usted.">WhatsApp</a></div>
  </div>
<nav class="navbar navbar-expand-lg navbar-dark" id="nav-control" style="background-color: #B22C24;">

    <a class="navbar-brand" href="#" id="icon-nav">
    	<img src="<?php echo base_url();?>assets/img/logo_ingelectric_blanco.png" width="300" class="d-inline-block align-top" alt="Logo IngelectricChile" id="logo-ingelectric">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff;">
    <img src="<?php echo base_url(); ?>assets/img/icon-menu.png">
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active"> -->
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">Quiénes Sómos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#servicios">Nuestros Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#galeria">Galeria de Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clientes">Nuestros Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="open_form">Contactanos</a>
      </li>
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  -->
  </div>
</nav>

<div class="modal fade bd-example-modal-lg" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="width:90%;">
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
            <select name="opcion" id="opcion"  placeholder="Seleccione su consulta...">
              <option value="Consulta">Consulta</option>
              <option value="Cotizacion">Cotización</option>
              <option value="Reclamo">Reclamo</option>
              <option value="Otros">Otros</option>
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
    var cli = 0;

    $("#cont-info").click(function(){

      if (cli==0) {
        cli=1;
         $("#cont-info").animate({
            right: '0px'
        }, 500);

      }else{
        cli=0;
        $("#cont-info").animate({
            right: '-200px'
        }, 500);

      }


     

    });



     
    function validaInput(idInput) {
      if (idInput.length>3) {

        return true;
      }else{
        return false;
      }

    
    }

  $("#open_form").click(function(){
    $('#modal_form').modal({backdrop: 'static', keyboard: false})
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
    var opcion = document.getElementById("opcion").value;
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
        "opcion"   : opcion,
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

		 
