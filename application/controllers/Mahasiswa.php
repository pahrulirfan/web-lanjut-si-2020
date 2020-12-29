<?php

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');

		if (!$this->session->userdata('nama_pengguna')){
			redirect('login/index');
		}
	}

	public function index($url_nim = '', $url_jur = '')
	{
//		$data['nama'] = 'Andrian';
//		$data['umur'] = '35';
//		$data['nim'] = $url_nim;
//		$data['jurusan'] = $url_jur;
//		$data['tbl_mahasiswa'] = $this->db->get('mahasiswa')->result();

		$data['data'] = $this->m_mahasiswa->getAll();

		$this->load->view('template/header');
		$this->load->view('mahasiswa/v_index', $data);
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

	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('mahasiswa/v_tambah');
	}

	public function simpan_data()
	{
		$data = [
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
		];

		$this->m_mahasiswa->create($data);
		redirect('mahasiswa/index', 'refresh');
	}

	public function hapus($input_nim)
	{
//		echo $input_nim;
		$this->m_mahasiswa->delete($input_nim);
		redirect('mahasiswa/index');
	}

	public function edit($input_nim)
	{
		// ambil data dari nim input
		$data['data_nim'] = $this->m_mahasiswa->getWhere($input_nim);
		$this->load->view('template/header');
		$this->load->view('mahasiswa/v_edit', $data);
	}

	public function simpan_edit()
	{
		$where = $this->input->post('nim');
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
		];
		$this->m_mahasiswa->update($where, $data);
		redirect('mahasiswa/index');
	}
}
