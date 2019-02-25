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
        <a class="nav-link" href="#galeria">Nuestros Servicios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#galeria">Galeria de Proyectos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#clientes">Nuestros Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactanos</a>
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

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav-control");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
		 