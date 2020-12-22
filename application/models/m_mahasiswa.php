<?php

class m_mahasiswa extends CI_Model
{
	private $tabel = 'mahasiswa';

	public function getAll()
	{
		// SELECT * FROM mahasiswa
		return $this->db->get($this->tabel)->result();
	}

	public function create($object)
	{
		// insert into mahasiswa (nim, nama, alamat) values ($nim, $nama, $alamat)
		return $this->db->insert($this->tabel, $object);
	}

	public function delete($input_nim)
	{
		// delete from mahasiswa where nim = $input_nim
		$this->db->delete($this->tabel, ['nim' => $input_nim]);
	}

	public function getWhere($input_nim)
	{
		// select * from mahasiswa where nim = $input_nim
		return $this->db->get_where($this->tabel,
			['nim' => $input_nim])->row_object();
	}

	public function update($where, $data)
	{
		// update mahasiswa set nama=$nama, alamat=$alamat
		// where nim = $nim
		$this->db->where(['nim' => $where]);
		$this->db->update($this->tabel, $data);
	}
}
