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
		return $this->db->insert($this->tabel, $object);
	}

	public function delete($input_nim)
	{
		// delete from mahasiswa where nim = $input_nim
		$this->db->delete($this->tabel, ['nim' => $input_nim]);
	}
}
