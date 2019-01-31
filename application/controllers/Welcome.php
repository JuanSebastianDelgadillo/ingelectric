<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('inicio');
	}

	public function reload(){
		$this->load->view('inicio');
		sleep(5);
		header('Location: '.base_url().'sitio'); 

	}

}
