<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'ARCA';

		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav-top');
		$this->load->view('pages/dashboard',$data);
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}
}
