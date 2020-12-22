<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function uts()
	{
		$this->load->view('uts');
	}

	public function coba()
	{
		echo 'Hasil coba coba';
	}
}
