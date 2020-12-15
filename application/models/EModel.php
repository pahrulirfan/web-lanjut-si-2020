<?php

class EModel extends CI_Model
{
	private $tabel = 'tabel_e';

	public function semuaData()
	{
		return $this->db->get($this->tabel)->result();
	}
}
