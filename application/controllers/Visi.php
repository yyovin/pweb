<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$this->load->view('visi');
		$this->load->view('templates/footer.php');
	}
}
