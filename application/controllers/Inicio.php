<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	public function reload()
	{
		 $this->load->view('inicio');
			
		echo "<script>
				setTimeout('location.href='".base_url()."index.php/servicio', 1000);
			 </script>
		";

		echo "Welcome";
	}

}
