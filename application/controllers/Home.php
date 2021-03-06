<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/nav.php');
		$data['planning'] = $this->m_data->ambil_data()->result();
		$this->load->view('home',$data);
		$this->load->view('templates/footer.php');
	}

}
