<?php

class EController extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('EModel');
	}

	// untuk menampilkan data
	public function index(){

		$data['isi_tabel'] = $this->EModel->semuaData();

		var_dump($data);
		die();

		$this->load->view('UTS/v_tampil');
	}
}
