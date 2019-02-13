<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>ProgressBar(jquery-circle-progress)</title>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inicio.css">
</head>
<body onload="redireccionar()">
	<div class="content">
		<div class="cont-todo">
			<img src="<?php echo base_url(); ?>assets/img/logo.png">
		 	<div class="circle" id="circle-b">

				<strong></strong>
			</div>
		</div>
	</div>
  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.1.3/circle-progress.min.js'></script>
    <script  src="<?php echo base_url(); ?>assets/js/inicio.js"></script>
    <script language="JavaScript">
	  function redireccionar() {
	    setTimeout("location.href='<?php echo base_url(); ?>index.php/servicio'", 3000);
	  }
	</script>
</body>
</html>
