<?php

class Mahasiswa extends CI_Controller
{
	public function index($url_nim = '', $url_jur = '')
	{
		$data['nama'] = 'Andrian';
		$data['umur'] = '35';
		$data['nim'] = $url_nim;
		$data['jurusan'] = $url_jur;
		$this->load->view('mahasiswa/v_tugas', $data);
	}

	public function tugas()
	{
		//select * from nama table
		$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();

		$this->load->view('mahasiswa/v_index', $data);
	}

	public function jurusan()
	{
		echo 'D3 Sistem Informasi';
	}
}
