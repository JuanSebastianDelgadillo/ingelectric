<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class servicio extends CI_Controller {

	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('base/nav');
		$this->load->view('base/slider');
		$this->load->view('base/about');
		$this->load->view('base/clientes');
		$this->load->view('base/footer');
		$this->load->view('base/bottom_footer');
	}

	

}