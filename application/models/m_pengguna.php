<?php

class m_pengguna extends CI_Model
{
	private $table = 'pengguna';

	public function cek_login($input_username, $input_password)
	{
		// select * from pengguna where username = $input_username,
		// password = $input_password;

		$this->db->where('username', $input_username);
		$this->db->where('password', $input_password);
		return $this->db->get($this->table);
	}
}
