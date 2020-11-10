<?php

class m_mahasiswa extends CI_Model
{
	private $tabel = 'mahasiswa';

	public function getAll()
	{
		// SELECT * FROM mahasiswa
		return $this->db->get($this->tabel)
					->result();
	}
}
