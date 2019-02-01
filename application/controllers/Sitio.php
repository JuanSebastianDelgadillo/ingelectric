<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	public function index()
	{
		$this->load->view('base/header');
		$this->load->view('base/nav');
		$this->load->view('sitio');
		$this->load->view('base/footer');
	}

	

}